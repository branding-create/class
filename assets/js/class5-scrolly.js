// class5-scrolly.js

document.addEventListener("DOMContentLoaded", () => {
    
    // --------------------------------------------------------
    // Fanta-Style Parallax Tracking for 15 Premium Scenes (Class 5)
    // Fast, sharp, confident motion
    // --------------------------------------------------------
    const pen = document.getElementById('premium-pen');
    const book = document.getElementById('premium-book');
    const cap = document.getElementById('premium-cap');
    
    const scenes = Array.from(document.querySelectorAll(".c-scene"));
    const sceneOffsets = [];
    const lastSceneIndex = scenes.length - 1;

    // 15 stops mapping for longest energetic journey
    const penMoves = [
        { top: 15, right: 10,  rotate: 10 },   // S1
        { top: 25, right: 45,  rotate: -30 },  // S2 
        { top: 35, right: 70,  rotate: -60 },  // S3
        { top: 40, right: 85,  rotate: 45 },   // S4
        { top: 50, right: 30,  rotate: 120 },  // S5
        { top: 55, right: 15,  rotate: 160 },  // S6
        { top: 60, right: 35,  rotate: -170 }, // S7
        { top: 65, right: 60,  rotate: 80 },   // S8
        { top: 70, right: 85,  rotate: -50 },  // S9
        { top: 75, right: 55,  rotate: 20 },   // S10
        { top: 80, right: 35,  rotate: 45 },   // S11
        { top: 85, right: 10,  rotate: -15 },  // S12
        { top: 88, right: 20,  rotate: -5 },   // S13
        { top: 92, right: 25,  rotate: 5 },    // S14
        { top: 95, right: 10,  rotate: 0 }     // S15
    ];

    const bookMoves = [
        { top: 10, right: 20, rotate: 25 },    // S1
        { top: 20, right: 10, rotate: 50 },   
        { top: 30, right: 15, rotate: 60 },   
        { top: 55, right: 10, rotate: -20 },   
        { top: 50, right: 50, rotate: -35 },   
        { top: 60, right: 85, rotate: -55 },  
        { top: 65, right: 55, rotate: -25 },  
        { top: 70, right: 70, rotate: 30 },   
        { top: 80, right: 15, rotate: 80 },   
        { top: 75, right: 45, rotate: 40 },   
        { top: 80, right: 55, rotate: 25 },   
        { top: 85, right: 75, rotate: -15 },  
        { top: 90, right: 85, rotate: -5},    
        { top: 92, right: 80, rotate: 10},    
        { top: 95, right: 80, rotate: 0 }     // S15
    ];

    const capMoves = [
        { top: 65, right: -5, rotate: -25 },   // S1
        { top: 55, right: 15, rotate: 10 },    
        { top: 25, right: 45, rotate: 40 },   
        { top: 40, right: 55, rotate: -20},   
        { top: 50, right: 85, rotate: -35},   
        { top: 60, right: -5, rotate: -70 },  
        { top: 65, right: 30, rotate: -45 },  
        { top: 80, right: 5,  rotate: -20 },  
        { top: 40, right: 35, rotate: 35 },   
        { top: 55, right: 60, rotate: 15 },   
        { top: 65, right: 65, rotate: 5 },   
        { top: 75, right: -5, rotate: -10 },  
        { top: 80, right: 10, rotate: 10 },   
        { top: 85, right: 15, rotate: 5 },    
        { top: 95, right: -5, rotate: 0 }      // S15
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
    // Cinematic GSAP ScrollTriggers
    // --------------------------------------------------------
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        // Fast & energetic page reveal
        gsap.from("#scene-1 .c-title", { opacity: 0, y: 50, duration: 1.0, ease: "power4.out", delay: 0.1 });
        gsap.from("#scene-1 .c-subtitle", { opacity: 0, y: 30, duration: 1.0, ease: "power3.out", delay: 0.2 });
        gsap.from("#scene-1 .hero-btns", { opacity: 0, y: 20, duration: 0.8, ease: "power3.out", delay: 0.4 });

        const sectionTitles = document.querySelectorAll('.c-scene:not(#scene-1) .c-title');
        sectionTitles.forEach(title => {
            gsap.from(title, {
                scrollTrigger: { trigger: title, start: "top 85%", once: true },
                opacity: 0, scale: 0.95, duration: 0.8, ease: "power3.out"
            });
        });

        // SCENE 4: Floating equations fast scrub
        const floats = document.querySelectorAll(".float-box");
        floats.forEach(f => {
            gsap.to(f, {
                scrollTrigger: { trigger: "#scene-4", start: "top bottom", end: "bottom top", scrub: 0.5 },
                y: (Math.random() * -600) - 100, rotate: (Math.random() * 200) - 100, opacity: 1
            });
        });

        // SCENE 5: Split Screen Comparison
        gsap.from(".split-box", {
            scrollTrigger: { trigger: "#scene-5", start: "top 75%", once: true },
            scale: 0.8, opacity: 0, duration: 0.8, ease: "back.out(2)"
        });

        // SCENE 6: Premium Cards
        gsap.from("#scene-6 .c-card", {
            scrollTrigger: { trigger: "#scene-6", start: "top 75%", once: true },
            y: 80, opacity: 0, duration: 0.8, stagger: 0.1, ease: "back.out(2)"
        });

        // SCENE 7: Timeline Flow
        gsap.from(".timeline-step", {
            scrollTrigger: { trigger: "#scene-7", start: "top 75%", once: true },
            x: -50, opacity: 0, duration: 0.8, stagger: 0.15, ease: "power3.out"
        });

        // SCENE 8: Subjects Blocks
        gsap.from("#scene-8 .subject-block", {
            scrollTrigger: { trigger: "#scene-8", start: "top 75%", once: true },
            y: 50, opacity: 0, duration: 0.8, stagger: 0.1, ease: "back.out(1.5)"
        });

        // SCENE 9: Performance Dashboard
        gsap.from(".dash-card", {
            scrollTrigger: { trigger: "#scene-9", start: "top 75%", once: true },
            y: 60, opacity: 0, scale: 0.9, duration: 1, stagger: 0.15, ease: "back.out(1.5)"
        });

        // SCENE 10: Counters
        const counters = document.querySelectorAll(".counter-val");
        counters.forEach(c => {
            ScrollTrigger.create({
                trigger: "#scene-10", start: "top 70%", once: true,
                onEnter: () => {
                    const target = +c.getAttribute('data-target');
                    gsap.to(c, { innerHTML: target, duration: 2, snap: { innerHTML: 1 }, ease: "power3.out" });
                }
            });
        });

        // SCENE 11: Features Grid
        gsap.from("#scene-11 .feature-card", {
            scrollTrigger: { trigger: "#scene-11", start: "top 75%", once: true },
            y: 50, opacity: 0, duration: 0.6, stagger: 0.1, ease: "power3.out"
        });

        // SCENE 12: Future Prep Cards
        gsap.from("#scene-12 .future-card", {
            scrollTrigger: { trigger: "#scene-12", start: "top 75%", once: true },
            y: 50, opacity: 0, scale: 0.95, duration: 0.8, stagger: 0.2, ease: "power3.out"
        });

        // SCENE 13: Image parallax zoom
        gsap.to("#scene-13 .bg-wrapper img", {
            scrollTrigger: { trigger: "#scene-13", start: "top bottom", end: "bottom top", scrub: true },
            y: "25%", scale: 1.15
        });

        // SCENE 14: Testimonials
        gsap.from("#scene-14 .testimonial-card", {
            scrollTrigger: { trigger: "#scene-14", start: "top 75%", once: true },
            y: 50, opacity: 0, duration: 0.8, stagger: 0.2, ease: "power3.out"
        });

        // SCENE 15: Emotional Close Pin
        gsap.from("#scene-15 .c-title", {
            scrollTrigger: { trigger: "#scene-15", start: "top 85%", once: true },
            opacity: 0, y: 50, duration: 1
        });
    }
    
    setTimeout(() => {
        scenes.forEach((scene, index) => sceneOffsets[index] = scene.offsetTop);
        updateParallax();
    }, 500);
});
