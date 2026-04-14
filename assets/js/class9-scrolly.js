// class9-scrolly.js

document.addEventListener("DOMContentLoaded", () => {
    
    // --------------------------------------------------------
    // Fanta-Style Parallax Tracking for 15 Premium Scenes (Class 9)
    // Sharp, fast, highly controlled bee movement with trail
    // --------------------------------------------------------
    const bee = document.getElementById('premium-bee');
    
    const scenes = Array.from(document.querySelectorAll(".c-scene"));
    const sceneOffsets = [];
    const lastSceneIndex = scenes.length - 1;

    // 15 stops mapping for Samarpan Batch (Sharp & Fast)
    const beeMoves = [
        { top: 15, right: 15,  rotate: 15 },   // S1
        { top: 30, right: 60,  rotate: -20 },  // S2 
        { top: 50, right: 20,  rotate: 45 },   // S3
        { top: 60, right: 50,  rotate: -10 },  // S4
        { top: 75, right: 10,  rotate: 60 },   // S5
        { top: 85, right: 80,  rotate: -40 },  // S6
        { top: 70, right: 30,  rotate: 20 },   // S7
        { top: 55, right: 70,  rotate: -30 },  // S8
        { top: 40, right: 15,  rotate: 10 },   // S9
        { top: 30, right: 55,  rotate: -15 },  // S10
        { top: 45, right: 85,  rotate: 35 },   // S11
        { top: 60, right: 20,  rotate: -25 },  // S12
        { top: 75, right: 60,  rotate: 5 },    // S13
        { top: 85, right: 15,  rotate: -10 },  // S14
        { top: 92, right: 35,  rotate: 0 }     // S15
    ];

    let ticking = false;
    const interpolate = (start, end, progress) => start + (end - start) * progress;
    
    let lastScrollY = window.scrollY;
    
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
        
        // Velocity Tracker for glowing trails (fast and sharp energy)
        const velocity = Math.abs(scrolly - lastScrollY);
        // Exponential calculation for trailing intensity
        const trailIntensity = Math.min(1.0, (velocity * velocity) / 10000); 
        
        lastScrollY = scrolly;
        
        if (sceneOffsets.length === 0 || sceneOffsets[0] === undefined) return;

        const scrollProgress = getScrollProgress(scrolly);
        const sceneIndex = Math.floor(scrollProgress);
        const sectionProgress = scrollProgress - sceneIndex;
        const vh = window.innerHeight / 100;

        const applyMove = (el, moves) => {
            if (!el || !moves[sceneIndex]) return;
            const curr = moves[sceneIndex];
            const next = moves[sceneIndex + 1] || curr; 
            
            // Adding a snappy easing to the progress mapping could be done here via math, 
            // but straight mapping combined with the fast GSAP makes the transition crisp.
            const _top = interpolate(curr.top, next.top, sectionProgress);
            const _right = interpolate(curr.right, next.right, sectionProgress);
            const _rot = interpolate(curr.rotate, next.rotate, sectionProgress);
            
            el.style.top = (scrolly + (_top * vh)) + 'px';
            el.style.right = _right + '%';
            el.style.transform = `rotate(${_rot}deg)`;
            
            // Dynamic intense trail and blur based on velocity for ultra-fast visual
            el.style.filter = `drop-shadow(0px 0px ${25 + (trailIntensity * 50)}px rgba(255, 215, 0, ${0.8 + (trailIntensity * 0.2)})) brightness(${1.2 + trailIntensity*0.5})`;
        };

        applyMove(bee, beeMoves);

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
    // Cinematic GSAP ScrollTriggers - FAST, SHARP & HIGH ENERGY
    // --------------------------------------------------------
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        // Fast & energetic page reveal
        gsap.from("#scene-1 .c-title", { opacity: 0, y: 80, duration: 0.8, ease: "power4.out", delay: 0.1 });
        gsap.from("#scene-1 .c-subtitle", { opacity: 0, y: 40, duration: 0.7, ease: "power3.out", delay: 0.3 });
        gsap.from("#scene-1 .hero-btns", { opacity: 0, y: 30, duration: 0.6, ease: "back.out(1.5)", delay: 0.5 });
        gsap.from("#premium-bee", { opacity: 0, scale: 0.2, rotation: -90, duration: 1.2, ease: "bounce.out", delay: 0.4});

        const sectionTitles = document.querySelectorAll('.c-scene:not(#scene-1) .c-title');
        sectionTitles.forEach(title => {
            gsap.from(title, {
                scrollTrigger: { trigger: title, start: "top 85%", once: true },
                opacity: 0, scale: 0.95, duration: 0.6, ease: "back.out(2)"
            });
        });

        // SCENE 2: Hard truth pop
        gsap.from("#scene-2", {
            scrollTrigger: { trigger: "#scene-2", start: "top 80%", once: true },
            scale: 0.9, opacity: 0, duration: 0.8, ease: "power4.out"
        });

        // SCENE 4: Floating equations fast scrub
        const floats = document.querySelectorAll(".float-box");
        floats.forEach((f, i) => {
            gsap.to(f, {
                scrollTrigger: { trigger: "#scene-4", start: "top bottom", end: "bottom top", scrub: 0.5 },
                y: (Math.random() * -1200) - 200, 
                rotate: (Math.random() * 500) - 250, 
                scale: 1.2 + (i*0.2),
                opacity: 1
            });
        });

        // SCENE 6: Subjects Blocks
        gsap.from("#scene-6 .subject-block", {
            scrollTrigger: { trigger: "#scene-6", start: "top 75%", once: true },
            y: 100, opacity: 0, duration: 0.6, stagger: 0.15, ease: "power4.out"
        });

        // SCENE 7: Premium Cards System
        gsap.from("#scene-7 .c-card", {
            scrollTrigger: { trigger: "#scene-7", start: "top 75%", once: true },
            y: 80, opacity: 0, rotationX: 15, duration: 0.7, stagger: 0.1, transformOrigin: "top center", ease: "back.out(1.5)"
        });

        // SCENE 8: Timeline Flow - High Energy 
        gsap.from(".timeline-step", {
            scrollTrigger: { trigger: "#scene-8", start: "top 75%", once: true },
            y: 80, 
            opacity: 0, 
            duration: 0.7, 
            stagger: 0.15, 
            ease: "power4.out"
        });

        // SCENE 9: Performance Dashboard
        gsap.from(".dash-card", {
            scrollTrigger: { trigger: "#scene-9", start: "top 75%", once: true },
            y: 80, opacity: 0, scale: 0.9, duration: 0.7, stagger: 0.2, ease: "back.out(1.5)"
        });

        // SCENE 10: Counters - Super Fast
        const counters = document.querySelectorAll(".counter-val");
        counters.forEach(c => {
            ScrollTrigger.create({
                trigger: "#scene-10", start: "top 70%", once: true,
                onEnter: () => {
                    const target = +c.getAttribute('data-target');
                    gsap.to(c, { innerHTML: target, duration: 1.5, snap: { innerHTML: 1 }, ease: "expo.out" });
                }
            });
        });

        // SCENE 11: Advantage Cards
        gsap.from("#scene-11 .c-card", {
            scrollTrigger: { trigger: "#scene-11", start: "top 80%", once: true },
            y: 80, opacity: 0, duration: 0.6, stagger: 0.15, ease: "power4.out"
        });

        // SCENE 12: Future Prep Cards
        gsap.from("#scene-12 .future-card", {
            scrollTrigger: { trigger: "#scene-12", start: "top 75%", once: true },
            y: 80, opacity: 0, scale: 0.95, duration: 0.6, stagger: 0.2, ease: "back.out(1.5)"
        });

        // SCENE 13: Image parallax zoom - Ultra Deep
        gsap.to("#scene-13 .bg-wrapper img", {
            scrollTrigger: { trigger: "#scene-13", start: "top bottom", end: "bottom top", scrub: 1 },
            y: "40%", scale: 1.3
        });
        
        gsap.from("#scene-13 .content-overlay", {
            scrollTrigger: { trigger: "#scene-13", start: "top 50%", once: true },
            y: 50, opacity: 0, duration: 0.8, ease: "power3.out"
        });

        // SCENE 14: Testimonials
        gsap.from("#scene-14 .testimonial-card", {
            scrollTrigger: { trigger: "#scene-14", start: "top 75%", once: true },
            y: 80, opacity: 0, rotationY: -15, duration: 0.7, transformPerspective: 500, stagger: 0.2, ease: "back.out(1.5)"
        });

        // SCENE 15: Emotional Close Pin
        gsap.from("#scene-15", {
            scrollTrigger: { trigger: "#scene-15", start: "top 85%", once: true },
            opacity: 0, y: 60, scale: 0.98, duration: 0.8, ease: "power4.out"
        });
        gsap.from("#scene-15 .hero-btns", {
            scrollTrigger: { trigger: "#scene-15", start: "top 85%", once: true },
            opacity: 0, y: 30, duration: 0.8, delay: 0.3, ease: "back.out(1.5)"
        });
    }
    
    setTimeout(() => {
        scenes.forEach((scene, index) => sceneOffsets[index] = scene.offsetTop);
        updateParallax();
    }, 500);
});
