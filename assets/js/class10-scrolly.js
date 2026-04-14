// class10-scrolly.js

document.addEventListener("DOMContentLoaded", () => {
    
    // --------------------------------------------------------
    // Fanta-Style Parallax Tracking for 15 Premium Scenes (Class 10)
    // EXTREME, fastest, most controlled bee movement with intense trail
    // --------------------------------------------------------
    const bee = document.getElementById('premium-bee');
    
    const scenes = Array.from(document.querySelectorAll(".c-scene"));
    const sceneOffsets = [];
    const lastSceneIndex = scenes.length - 1;

    // 15 stops mapping for Sampoorna Samarpan Batch (Extreme & Snappy)
    const beeMoves = [
        { top: 15, right: 10,  rotate: 20 },   // S1 - Hero
        { top: 25, right: 70,  rotate: -35 },  // S2 - Reality
        { top: 40, right: 15,  rotate: 50 },   // S3 - Message
        { top: 55, right: 80,  rotate: -20 },  // S4 - Floats
        { top: 75, right: 20,  rotate: 70 },   // S5 - System
        { top: 85, right: 75,  rotate: -50 },  // S6 - Mastery
        { top: 60, right: 10,  rotate: 30 },   // S7 - Strategy
        { top: 50, right: 85,  rotate: -40 },  // S8 - Test Series
        { top: 35, right: 15,  rotate: 20 },   // S9 - Analytics
        { top: 25, right: 65,  rotate: -25 },  // S10- Revision
        { top: 45, right: 90,  rotate: 45 },   // S11- Results
        { top: 65, right: 10,  rotate: -35 },  // S12- Advantage
        { top: 80, right: 70,  rotate: 15 },   // S13- Classroom
        { top: 90, right: 15,  rotate: -15 },  // S14- Trust
        { top: 95, right: 40,  rotate: 0 }     // S15- emotional CTA
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
        
        // Extreme Velocity Tracker for Class 10 glowing trails (Pressure)
        const velocity = Math.abs(scrolly - lastScrollY);
        // Amplified Exponential calculation for aggressive trailing
        const trailIntensity = Math.min(1.0, (velocity * velocity) / 6000); 
        
        lastScrollY = scrolly;
        
        if (sceneOffsets.length === 0 || sceneOffsets[0] === undefined) return;

        const scrollProgress = getScrollProgress(scrolly);
        const sceneIndex = Math.floor(scrollProgress);
        let sectionProgress = scrollProgress - sceneIndex;
        
        // Snappy transition for Class 10
        // Use a slight curve to make it feel sharper
        sectionProgress = sectionProgress < 0.5 ? 2 * sectionProgress * sectionProgress : 1 - Math.pow(-2 * sectionProgress + 2, 2) / 2;

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
            el.style.transform = `rotate(${_rot}deg) scale(${1 + trailIntensity*0.1})`;
            
            // Extreme aggressive intense trail (Red + Gold mix) for Class 10 speed
            el.style.filter = `drop-shadow(0px 0px ${30 + (trailIntensity * 60)}px rgba(255, 0, 60, ${0.8 + (trailIntensity * 0.2)})) drop-shadow(0px 0px ${10 + (trailIntensity * 20)}px rgba(255, 215, 0, 1)) brightness(${1.3 + trailIntensity*0.6})`;
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
    // Cinematic GSAP ScrollTriggers - EXTREME PRESSURE & IMPACT
    // --------------------------------------------------------
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        // Heavy, explosive heroic entrance
        gsap.from("#scene-1 .c-title", { opacity: 0, scale: 0.8, y: 100, duration: 0.8, ease: "power4.out", delay: 0.2 });
        gsap.from("#scene-1 .c-subtitle", { opacity: 0, y: 40, duration: 0.7, ease: "back.out(1)", delay: 0.4 });
        gsap.from("#scene-1 .hero-btns", { opacity: 0, y: 20, duration: 0.5, ease: "back.out(2)", delay: 0.6 });
        gsap.from("#premium-bee", { opacity: 0, scale: 0.1, rotation: 180, duration: 1, ease: "expo.out", delay: 0.5});

        const sectionTitles = document.querySelectorAll('.c-scene:not(#scene-1) .c-title');
        sectionTitles.forEach(title => {
            gsap.from(title, {
                scrollTrigger: { trigger: title, start: "top 85%", once: true },
                opacity: 0, scale: 0.8, y: 40, duration: 0.5, ease: "back.out(3)"
            });
        });

        // SCENE 2: Hard truth pop - Cinematic Pause
        gsap.from("#scene-2", {
            scrollTrigger: { trigger: "#scene-2", start: "top 80%", once: true },
            scale: 0.85, opacity: 0, duration: 0.8, ease: "power4.out"
        });

        // SCENE 4: Floating elements extreme fast scrub
        const floats = document.querySelectorAll(".float-box");
        floats.forEach((f, i) => {
            gsap.to(f, {
                scrollTrigger: { trigger: "#scene-4", start: "top bottom", end: "bottom top", scrub: 0.1 }, // ultra fast scrub
                y: (Math.random() * -1500) - 300, 
                rotate: (Math.random() * 700) - 350, 
                scale: 1.3 + (i*0.3),
                opacity: 1
            });
        });

        // SCENE 6: Subjects Blocks - Aggressive stagger
        gsap.from("#scene-6 .subject-block", {
            scrollTrigger: { trigger: "#scene-6", start: "top 75%", once: true },
            y: 120, opacity: 0, duration: 0.5, stagger: 0.1, ease: "power4.out"
        });

        // SCENE 7: Strategy System Features - Pop up
        gsap.from("#scene-7 .c-card", {
            scrollTrigger: { trigger: "#scene-7", start: "top 75%", once: true },
            y: 60, opacity: 0, scale: 0.5, duration: 0.5, stagger: 0.08, ease: "back.out(2)"
        });

        // SCENE 8: Test Series System
        gsap.from("#scene-8 .c-card", {
            scrollTrigger: { trigger: "#scene-8", start: "top 75%", once: true },
            y: 80, 
            opacity: 0, duration: 0.6, stagger: 0.15, ease: "back.out(1.5)"
        });

        // SCENE 9: Performance Dashboard
        gsap.from(".dash-card", {
            scrollTrigger: { trigger: "#scene-9", start: "top 75%", once: true },
            y: 100, opacity: 0, scale: 0.8, duration: 0.6, stagger: 0.15, ease: "back.out(1.5)"
        });

        // SCENE 10: Revision - Split screen fast slide
        gsap.from(".split-box", {
            scrollTrigger: { trigger: "#scene-10", start: "top 75%", once: true },
            y: 100, opacity: 0, duration: 0.5, stagger: 0.15, ease: "power4.out"
        });

        // SCENE 11: Counters - Instantaneous lock in
        const counters = document.querySelectorAll(".counter-val");
        counters.forEach(c => {
            ScrollTrigger.create({
                trigger: "#scene-11", start: "top 70%", once: true,
                onEnter: () => {
                    const target = +c.getAttribute('data-target');
                    gsap.to(c, { innerHTML: target, duration: 1, snap: { innerHTML: 1 }, ease: "power4.out" });
                }
            });
        });

        // SCENE 12: Advantage Cards
        gsap.from("#scene-12 .c-card", {
            scrollTrigger: { trigger: "#scene-12", start: "top 80%", once: true },
            scale: 0.9, opacity: 0, duration: 0.5, stagger: 0.1, ease: "back.out(1.5)"
        });

        // SCENE 13: Image parallax zoom - Extreme Deep
        gsap.to("#scene-13 .bg-wrapper img", {
            scrollTrigger: { trigger: "#scene-13", start: "top bottom", end: "bottom top", scrub: 0.5 },
            y: "50%", scale: 1.4
        });
        
        gsap.from("#scene-13 .content-overlay", {
            scrollTrigger: { trigger: "#scene-13", start: "top 50%", once: true },
            scale: 0.9, opacity: 0, duration: 0.5, ease: "power4.out"
        });

        // SCENE 14: Testimonials
        gsap.from("#scene-14 .testimonial-card", {
            scrollTrigger: { trigger: "#scene-14", start: "top 75%", once: true },
            y: 100, opacity: 0, rotationZ: 5, duration: 0.5, stagger: 0.1, ease: "back.out(1.5)"
        });

        // SCENE 15: Emotional Close Pin
        gsap.from("#scene-15", {
            scrollTrigger: { trigger: "#scene-15", start: "top 85%", once: true },
            opacity: 0, scale: 0.95, y: 100, duration: 0.8, ease: "expo.out"
        });
        gsap.from("#scene-15 .hero-btns", {
            scrollTrigger: { trigger: "#scene-15", start: "top 85%", once: true },
            opacity: 0, y: 50, duration: 0.6, delay: 0.2, ease: "back.out(2)"
        });
    }
    
    setTimeout(() => {
        scenes.forEach((scene, index) => sceneOffsets[index] = scene.offsetTop);
        updateParallax();
    }, 500);
});
