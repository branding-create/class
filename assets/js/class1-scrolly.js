// class1-scrolly.js

document.addEventListener("DOMContentLoaded", () => {
    
    // --------------------------------------------------------
    // Fanta-Style Parallax Tracking for 11 Premium Scenes
    // --------------------------------------------------------
    const pen = document.getElementById('premium-pen');
    const book = document.getElementById('premium-book');
    const cap = document.getElementById('premium-cap');
    
    const scenes = Array.from(document.querySelectorAll(".c-scene"));
    const sceneOffsets = scenes.map(scene => scene.offsetTop);
    const lastSceneIndex = scenes.length - 1;

    // Expand the 5 Fanta positions to 11 fluid positions for the new scenes
    // Each position is: { top: % of viewport height, right: % of viewport width, rotate: degrees }
    const penMoves = [
        { top: 15, right: 5,  rotate: 0 },    // S1: Top Right
        { top: 25, right: 30, rotate: -20 },  // S2: Drifting Left
        { top: 35, right: 70, rotate: -45 },  // S3: Left Side
        { top: 45, right: 60, rotate: 10 },   // S4: Middle Left
        { top: 55, right: 10, rotate: 90 },   // S5: Right Side
        { top: 65, right: 20, rotate: 45 },   // S6: Middle Right
        { top: 75, right: 80, rotate: -15 },  // S7: Far Left
        { top: 80, right: 50, rotate: 0 },    // S8: Center
        { top: 85, right: 20, rotate: 15 },   // S9: Right Side
        { top: 85, right: 10, rotate: 30 },   // S10: Bottom Right
        { top: 90, right: 5,  rotate: 0 }     // S11: Final Rest
    ];

    const bookMoves = [
        { top: 10, right: 25, rotate: 15 },   
        { top: 20, right: 10, rotate: 30 },   
        { top: 40, right: 5,  rotate: 45 },   
        { top: 50, right: 25, rotate: 10 },   
        { top: 60, right: 80, rotate: -30 },  
        { top: 70, right: 60, rotate: 15 },   
        { top: 80, right: 15, rotate: 60 },   
        { top: 70, right: 30, rotate: 40 },   
        { top: 90, right: 70, rotate: 0 },    
        { top: 85, right: 80, rotate: -10},   
        { top: 90, right: 85, rotate: 0 }     
    ];

    const capMoves = [
        { top: 60, right: -5, rotate: -15 },  
        { top: 50, right: 20, rotate: 0 },    
        { top: 20, right: 50, rotate: 30 },   
        { top: 30, right: 70, rotate: -10},   
        { top: 70, right: -10,rotate: -60 },  
        { top: 80, right: 10, rotate: -30},   
        { top: 30, right: 40, rotate: 45 },   
        { top: 50, right: 60, rotate: 20 },   
        { top: 80, right: 5,  rotate: 0 },    
        { top: 75, right: 15, rotate: 10 },   
        { top: 85, right: -5, rotate: 0 }     
    ];

    let ticking = false;
    const interpolate = (start, end, progress) => start + (end - start) * progress;
    
    // Calculates which scene we are currently looking at and the progress (0.0 to 1.0) into the next scene
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
        
        // If scenes haven't loaded geometry yet, return
        if (sceneOffsets.length === 0 || sceneOffsets[0] === undefined) return;

        const scrollProgress = getScrollProgress(scrolly);
        const sceneIndex = Math.floor(scrollProgress);
        const sectionProgress = scrollProgress - sceneIndex;
        const vh = window.innerHeight / 100;

        const applyMove = (el, moves) => {
            if (!el || !moves[sceneIndex]) return;
            const curr = moves[sceneIndex];
            const next = moves[sceneIndex + 1] || curr; // clamp at the end
            
            // Wait to ensure we are applying only valid math
            const _top = interpolate(curr.top, next.top, sectionProgress);
            const _right = interpolate(curr.right, next.right, sectionProgress);
            const _rot = interpolate(curr.rotate, next.rotate, sectionProgress);
            
            // 'top' adds current scroll position so it stays "fixed-like" relative to viewport height
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

    // Recalculate section offsets on resize
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

        // INITIAL PAGE REVEAL (Only for Hero Scene)
        gsap.from("#scene-1 .c-title", { opacity: 0, y: 50, duration: 1.5, ease: "power4.out", delay: 0.2 });
        gsap.from("#scene-1 .c-subtitle", { opacity: 0, y: 30, duration: 1.5, ease: "power4.out", delay: 0.5 });
        gsap.from("#scene-1 .hero-btns", { opacity: 0, y: 20, duration: 1, ease: "power3.out", delay: 0.8 });

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
                duration: 1,
                ease: "power2.out"
            });
        });
        
        // SCENE 2 is now handled perfectly by the universal .c-title loop above!

        // SCENE 3: Teacher Image Reveal
        gsap.from("#scene-3 .teacher-img-wrap", {
            scrollTrigger: {
                trigger: "#scene-3",
                start: "top 70%",
                once: true
            },
            y: 50,
            opacity: 0,
            duration: 1.2,
            scale: 0.95,
            ease: "power3.out"
        });

        // SCENE 4: Floating letters/numbers (Parallax)
        const floats = document.querySelectorAll(".float-box");
        floats.forEach(f => {
            gsap.to(f, {
                scrollTrigger: {
                    trigger: "#scene-4",
                    start: "top bottom",
                    end: "bottom top",
                    scrub: true
                },
                y: (Math.random() * -300) - 100,
                rotate: (Math.random() * 90) - 45,
                opacity: 1
            });
        });

        // SCENE 5: Premium Cards Tilt/Fade
        gsap.from("#scene-5 .c-card", {
            scrollTrigger: { trigger: "#scene-5", start: "top 75%", once: true },
            y: 100, 
            opacity: 0, 
            duration: 1, 
            stagger: 0.2, 
            ease: "back.out(1.7)"
        });

        // SCENE 6: Subjects Blocks
        gsap.from("#scene-6 .subject-block", {
            scrollTrigger: { trigger: "#scene-6", start: "top 75%", once: true },
            scale: 0.8,
            opacity: 0,
            duration: 1,
            stagger: 0.2,
            ease: "power3.out"
        });

        // SCENE 7: Image parallax zoom
        gsap.to("#scene-7 .bg-wrapper img", {
            scrollTrigger: {
                trigger: "#scene-7",
                start: "top bottom",
                end: "bottom top",
                scrub: true
            },
            y: "20%",
            scale: 1.05
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
                        duration: 2.5,
                        snap: { innerHTML: 1 },
                        ease: "power2.out"
                    });
                }
            });
        });

        // SCENE 9: Features Grid
        gsap.from("#scene-9 .feature-card", {
            scrollTrigger: { trigger: "#scene-9", start: "top 75%", once: true },
            y: 50,
            opacity: 0,
            duration: 0.8,
            stagger: 0.15,
            ease: "back.out(1.5)"
        });

        // SCENE 10: Map Subtle Animation
        gsap.from("#scene-10 iframe", {
            scrollTrigger: {
                trigger: "#scene-10",
                start: "top 75%",
                once: true
            },
            opacity: 0,
            scale: 0.9,
            duration: 1.2,
            ease: "power2.out"
        });

        // SCENE 11: Emotional Close Pin
        gsap.from("#scene-11 .c-title", {
            scrollTrigger: {
                trigger: "#scene-11",
                start: "top 85%",
                once: true
            },
            opacity: 0,
            y: 50
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
