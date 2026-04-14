// class3-scrolly.js

document.addEventListener("DOMContentLoaded", () => {
    
    // --------------------------------------------------------
    // Fanta-Style Parallax Tracking for 11 Premium Scenes (Class 3)
    // Sharper, faster motion -> Confidence & Mastery
    // --------------------------------------------------------
    const pen = document.getElementById('premium-pen');
    const book = document.getElementById('premium-book');
    const cap = document.getElementById('premium-cap');
    
    const scenes = Array.from(document.querySelectorAll(".c-scene"));
    const sceneOffsets = scenes.map(scene => scene.offsetTop);
    const lastSceneIndex = scenes.length - 1;

    // Movement maps symbolic of faster logic and precision
    const penMoves = [
        { top: 15, right: 10, rotate: 10 },    // S1
        { top: 25, right: 35, rotate: -25 },  // S2 
        { top: 35, right: 60, rotate: -45 },  // S3
        { top: 40, right: 75, rotate: 30 },   // S4
        { top: 55, right: 15, rotate: 140 },  // S5
        { top: 65, right: 50, rotate: 60 },   // S6
        { top: 75, right: 80, rotate: -35 },  // S7
        { top: 80, right: 40, rotate: 15 },    // S8
        { top: 85, right: 20, rotate: 30 },   // S9
        { top: 85, right: 15, rotate: -25 },  // S10
        { top: 90, right: 10, rotate: 0 }     // S11
    ];

    const bookMoves = [
        { top: 10, right: 20, rotate: 25 },   
        { top: 20, right: 15, rotate: 40 },   
        { top: 30, right: 10,  rotate: 50 },   
        { top: 55, right: 20, rotate: -10 },   
        { top: 65, right: 75, rotate: -40 },  
        { top: 75, right: 55, rotate: 25 },   
        { top: 85, right: 10, rotate: 70 },   
        { top: 75, right: 35, rotate: 30 },   
        { top: 95, right: 65, rotate: -10 },    
        { top: 85, right: 85, rotate: 10},   
        { top: 90, right: 80, rotate: 0 }     
    ];

    const capMoves = [
        { top: 65, right: 5, rotate: -25 },  
        { top: 55, right: 25, rotate: 10 },    
        { top: 25, right: 55, rotate: 40 },   
        { top: 40, right: 65, rotate: -20},   
        { top: 65, right: -5,rotate: -70 },  
        { top: 85, right: 10, rotate: -15},   
        { top: 40, right: 45, rotate: 35 },   
        { top: 60, right: 55, rotate: 10 },   
        { top: 75, right: 5,  rotate: -10 },    
        { top: 80, right: 20, rotate: 10 },   
        { top: 85, right: -5, rotate: 0 }     
    ];

    let ticking = false;
    const interpolate = (start, end, progress) => start + (end - start) * progress;
    
    const getScrollProgress = (scrolly) => {
        for (let i = 0; i < lastSceneIndex; i++) {
            if (scrolly >= sceneOffsets[i] && scrolly < sceneOffsets[i + 1]) {
                return i + (scrolly - sceneOffsets[i]) / (sceneOffsets[i + 1] - sceneOffsets[i]);
            }
        }
        return lastSceneIndex;
    };

    const updateParallax = () => {
        const scrolly = window.scrollY;
        
        if (sceneOffsets.length === 0 || sceneOffsets[0] === undefined) return;

        const scrollProgress = getScrollProgress(scrolly);
        const sceneIndex = Math.floor(scrollProgress);
        const sectionProgress = scrollProgress - sceneIndex;
        const vh = window.innerHeight / 100;

        const applyMove = (el, moves) => {
            if (!el || !moves[sceneIndex]) return;
            const curr = moves[sceneIndex];
            const next = moves[sceneIndex + 1] || curr; 
            
            const _top = interpolate(curr.top, next.top, sectionProgress);
            const _right = interpolate(curr.right, next.right, sectionProgress);
            const _rot = interpolate(curr.rotate, next.rotate, sectionProgress);
            
            el.style.top = (scrolly + (_top * vh)) + 'px';
            el.style.right = _right + '%';
            el.style.transform = `rotate(${_rot}deg)`;
        };

        applyMove(pen, penMoves);
        applyMove(book, bookMoves);
        applyMove(cap, capMoves);

        ticking = false;
    };

    window.addEventListener("scroll", () => {
        if (!ticking) {
            window.requestAnimationFrame(updateParallax);
            ticking = true;
        }
    });

    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            scenes.forEach((scene, index) => {
                sceneOffsets[index] = scene.offsetTop;
            });
            updateParallax();
        }, 250);
    });

    // --------------------------------------------------------
    // Cinematic GSAP ScrollTriggers (Apple-Style Reveals)
    // --------------------------------------------------------
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        // INITIAL PAGE REVEAL (Only for Hero Scene) - Fast & Confident
        gsap.from("#scene-1 .c-title", { opacity: 0, y: 50, duration: 1.2, ease: "back.out(1.5)", delay: 0.1 });
        gsap.from("#scene-1 .c-subtitle", { opacity: 0, y: 30, duration: 1.2, ease: "power3.out", delay: 0.3 });
        gsap.from("#scene-1 .hero-btns", { opacity: 0, y: 20, duration: 0.8, ease: "power3.out", delay: 0.5 });

        // LOOP THRU ALL TITLES
        const sectionTitles = document.querySelectorAll('.c-scene:not(#scene-1) .c-title');
        sectionTitles.forEach(title => {
            gsap.from(title, {
                scrollTrigger: {
                    trigger: title,
                    start: "top 85%",
                    once: true
                },
                opacity: 0,
                y: 50,
                duration: 0.8,
                ease: "power3.out"
            });
        });

        // SCENE 2 is now handled perfectly by the universal .c-title loop above!

        // SCENE 4: Floating academic icons
        const floats = document.querySelectorAll(".float-box");
        floats.forEach(f => {
            gsap.to(f, {
                scrollTrigger: {
                    trigger: "#scene-4",
                    start: "top bottom",
                    end: "bottom top",
                    scrub: true
                },
                y: (Math.random() * -400) - 100,
                rotate: (Math.random() * 120) - 60,
                opacity: 1
            });
        });

        // SCENE 5: Premium Cards - Tilt/Fade (Sharper snapping)
        gsap.from("#scene-5 .c-card", {
            scrollTrigger: { trigger: "#scene-5", start: "top 75%", once: true },
            y: 80, 
            opacity: 0, 
            duration: 0.8, 
            stagger: 0.15, 
            ease: "back.out(2)"
        });

        // SCENE 6: Subjects Blocks
        gsap.from("#scene-6 .subject-block", {
            scrollTrigger: { trigger: "#scene-6", start: "top 75%", once: true },
            scale: 0.85,
            opacity: 0,
            duration: 0.8,
            stagger: 0.15,
            ease: "back.out(1.5)"
        });

        // SCENE 7: Image parallax zoom - faster scaling
        gsap.to("#scene-7 .bg-wrapper img", {
            scrollTrigger: {
                trigger: "#scene-7",
                start: "top bottom",
                end: "bottom top",
                scrub: true
            },
            y: "25%",
            scale: 1.1
        });

        // SCENE 8: Counters
        const counters = document.querySelectorAll(".counter-val");
        counters.forEach(c => {
            ScrollTrigger.create({
                trigger: "#scene-8",
                start: "top 70%",
                once: true,
                onEnter: () => {
                    const target = +c.getAttribute('data-target');
                    gsap.to(c, {
                        innerHTML: target,
                        duration: 2,
                        snap: { innerHTML: 1 },
                        ease: "power3.out"
                    });
                }
            });
        });

        // SCENE 9: Features Grid
        gsap.from("#scene-9 .feature-card", {
            scrollTrigger: { trigger: "#scene-9", start: "top 75%", once: true },
            y: 50,
            opacity: 0,
            duration: 0.7,
            stagger: 0.1,
            ease: "power3.out"
        });

        // SCENE 10: Testimonial Cards Animation
        gsap.from("#scene-10 .testimonial-card", {
            scrollTrigger: {
                trigger: "#scene-10",
                start: "top 75%",
                once: true
            },
            y: 50,
            opacity: 0,
            duration: 0.8,
            stagger: 0.2,
            ease: "power3.out"
        });

        // SCENE 11: Emotional Close Pin
        gsap.from("#scene-11 .c-title", {
            scrollTrigger: {
                trigger: "#scene-11",
                start: "top 85%",
                once: true
            },
            opacity: 0,
            y: 50,
            duration: 1
        });
        
    }
    
    // Fallback trigger offset setup
    setTimeout(() => {
        scenes.forEach((scene, index) => {
            sceneOffsets[index] = scene.offsetTop;
        });
        updateParallax();
    }, 500);
});
