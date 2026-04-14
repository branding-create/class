// assets/js/main.js

// Check and apply theme immediately to avoid flash across pages
(function() {
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        document.documentElement.setAttribute('data-theme', savedTheme);
    }
})();

document.addEventListener("DOMContentLoaded", () => {
    
    // --- Preloader ---
    const preloader = document.getElementById('preloader');
    setTimeout(() => {
        if(preloader) {
            preloader.style.opacity = '0';
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 500);
        }
    }, 1500);

    // Bubbly particle tail logic (if present)
    const particleTrail = document.querySelector('.bubbly-particle-trail .particles');
    if (particleTrail) {
        document.addEventListener('mousemove', (e) => {
            if(Math.random() < 0.2) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = e.clientX + 'px';
                particle.style.top = e.clientY + 'px';
                
                // Random colors
                const colors = ['#8B0000', '#FFC107', '#FFA500', '#FFFFFF'];
                particle.style.background = colors[Math.floor(Math.random() * colors.length)];
                
                particleTrail.appendChild(particle);
                
                setTimeout(() => {
                    particle.style.transform = `translate(${Math.random() * 50 - 25}px, ${Math.random() * -100 - 50}px) scale(0)`;
                    particle.style.opacity = '0';
                    particle.style.transition = 'all 1s ease-out';
                }, 10);
                
                setTimeout(() => {
                    particle.remove();
                }, 1000);
            }
        });
    }

    // Parallax Animation for Pen, Book, Cap
    const pen = document.getElementById('pen-main');
    const book = document.getElementById('book-element');
    const cap = document.getElementById('cap-element');
    const sections = Array.from(document.querySelectorAll("section"));
    const sectionOffsets = sections.map(section => section.offsetTop);
    const lastSectionIndex = sections.length - 1;

    // We will mimic the 3d scroll behavior the user had
    // These maps show where each item moves per section index
    // pen moves: top%, right/left transform, rotate
    const penMoves = [
        { top: 15, right: 5, rotate: 0 },
        { top: 35, right: 70, rotate: -45 },
        { top: 55, right: 10, rotate: 90 },
        { top: 75, right: 80, rotate: -15 },
        { top: 85, right: 20, rotate: 0 }
    ];

    const bookMoves = [
        { top: 10, right: 25, rotate: 15 },
        { top: 40, right: 5, rotate: 45 },
        { top: 60, right: 80, rotate: -30 },
        { top: 80, right: 15, rotate: 60 },
        { top: 90, right: 70, rotate: 0 }
    ];

    const capMoves = [
        { top: 60, right: -5, rotate: -15 },
        { top: 20, right: 50, rotate: 30 },
        { top: 70, right: -10, rotate: -60 },
        { top: 30, right: 40, rotate: 45 },
        { top: 80, right: 5, rotate: 0 }
    ];

    // Throttle the scroll listener slightly for better performance using requestAnimationFrame
    let ticking = false;
    
    const interpolate = (start, end, progress) => start + (end - start) * progress;
    
    const getScrollProgress = (scrolly) => {
        for (let i = 0; i < lastSectionIndex; i++) {
            if (scrolly >= sectionOffsets[i] && scrolly < sectionOffsets[i + 1]) {
                return i + (scrolly - sectionOffsets[i]) / (sectionOffsets[i + 1] - sectionOffsets[i]);
            }
        }
        return lastSectionIndex;
    };

    const updateParallax = () => {
        const scrolly = window.scrollY;
        const scrollProgress = getScrollProgress(scrolly);
        const sectionIndex = Math.floor(scrollProgress);
        const sectionProgress = scrollProgress - sectionIndex;
        const vh = window.innerHeight / 100;

        if (pen && penMoves[sectionIndex]) {
            const nextPen = penMoves[sectionIndex + 1] || penMoves[sectionIndex];
            const currPen = penMoves[sectionIndex];
            
            const currTop = interpolate(currPen.top, nextPen.top, sectionProgress);
            const currRight = interpolate(currPen.right, nextPen.right, sectionProgress);
            const currRot = interpolate(currPen.rotate, nextPen.rotate, sectionProgress);
            
            pen.style.top = (scrolly + (currTop * vh)) + 'px';
            pen.style.right = currRight + '%';
            pen.style.transform = `rotate(${currRot}deg)`;
        }

        if (book && bookMoves[sectionIndex]) {
            const nextBook = bookMoves[sectionIndex + 1] || bookMoves[sectionIndex];
            const currBook = bookMoves[sectionIndex];
            
            const currTop = interpolate(currBook.top, nextBook.top, sectionProgress);
            const currRight = interpolate(currBook.right, nextBook.right, sectionProgress);
            const currRot = interpolate(currBook.rotate, nextBook.rotate, sectionProgress);
            
            book.style.top = (scrolly + (currTop * vh)) + 'px';
            book.style.right = currRight + '%';
            book.style.transform = `rotate(${currRot}deg)`;
        }

        if (cap && capMoves[sectionIndex]) {
            const nextCap = capMoves[sectionIndex + 1] || capMoves[sectionIndex];
            const currCap = capMoves[sectionIndex];
            
            const currTop = interpolate(currCap.top, nextCap.top, sectionProgress);
            const currRight = interpolate(currCap.right, nextCap.right, sectionProgress);
            const currRot = interpolate(currCap.rotate, nextCap.rotate, sectionProgress);
            
            cap.style.top = (scrolly + (currTop * vh)) + 'px';
            cap.style.right = currRight + '%';
            cap.style.transform = `rotate(${currRot}deg)`;
        }
        
        ticking = false;
    };

    window.addEventListener("scroll", () => {
        if (!ticking) {
            window.requestAnimationFrame(updateParallax);
            ticking = true;
        }
    });
    
    // Initial call
    updateParallax();

    // Recalculate section offsets on resize
    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            sections.forEach((section, index) => {
                sectionOffsets[index] = section.offsetTop;
            });
        }, 250);
    });

    // Theme Toggle
    const themeToggle = document.getElementById('themeToggle');
    if (themeToggle) {
        themeToggle.addEventListener('click', () => {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
        });
    }

    // --- Hamburger Menu Logic ---
    const hamburger = document.getElementById('hamburger');
    const navList = document.querySelector('.nav-list');
    
    if (hamburger && navList) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navList.classList.toggle('active');
        });

        // Close menu when clicking outside or on a link
        document.addEventListener('click', (e) => {
            if (!hamburger.contains(e.target) && !navList.contains(e.target)) {
                hamburger.classList.remove('active');
                navList.classList.remove('active');
            }
        });

        const navLinks = navList.querySelectorAll('.nav-link:not(.dropdown > .nav-link)');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navList.classList.remove('active');
            });
        });

        // Mobile dropdown toggles for ALL nested levels
        const dropdowns = document.querySelectorAll('.dropdown');
        dropdowns.forEach(dropdown => {
            // Select only the direct child anchor
            const link = dropdown.querySelector(':scope > a');
            if (link) {
                link.addEventListener('click', (e) => {
                    if (window.innerWidth <= 768) {
                        e.preventDefault();
                        e.stopPropagation(); // Prevent bubbling up to parent dropdowns
                        
                        // Toggle the current dropdown
                        dropdown.classList.toggle('mobile-open');
                        
                        // Optional: close other siblings
                        const siblings = Array.from(dropdown.parentElement.children);
                        siblings.forEach(sibling => {
                            if (sibling !== dropdown && sibling.classList.contains('dropdown')) {
                                sibling.classList.remove('mobile-open');
                            }
                        });
                    }
                });
            }
        });
    }

    // --- Chat Bot Logic ---
    const openChatBtn = document.getElementById('openChatBtn');
    const chatPopup = document.getElementById('chatPopup');
    const closeChatBtn = document.getElementById('closeChatBtn');

    if (openChatBtn && chatPopup && closeChatBtn) {
        openChatBtn.addEventListener('click', () => {
            chatPopup.style.display = 'block';
        });

        closeChatBtn.addEventListener('click', () => {
            chatPopup.style.display = 'none';
        });
    }

    // --- Results Carousel Logic ---
    const track = document.querySelector('.carousel-track');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    if (track && prevBtn && nextBtn) {
        let currentIndex = 0;
        const slides = Array.from(track.children);
        
        const updateCarousel = () => {
            track.style.transform = `translateX(-${currentIndex * 100}%)`;
        };

        nextBtn.addEventListener('click', () => {
            if (currentIndex < slides.length - 1) {
                currentIndex++;
            } else {
                currentIndex = 0; // loop back
            }
            updateCarousel();
        });

        prevBtn.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = slides.length - 1; // loop to end
            }
            updateCarousel();
        });
    }

    // GSAP Fallback
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        gsap.from(".hero-title", {
            y: 50,
            opacity: 0,
            duration: 1,
            delay: 1.5,
            ease: "power3.out"
        });

        gsap.from(".hero-buttons", {
            y: 30,
            opacity: 0,
            duration: 1,
            delay: 1.8,
            ease: "power3.out"
        });
        
        // Staggers
        gsap.from(".course-card", {
            scrollTrigger: { trigger: ".courses-section", start: "top 70%" },
            y: 50, opacity: 0, duration: 0.8, stagger: 0.2, ease: "power2.out"
        });

        const counters = document.querySelectorAll('.counter-value');
        counters.forEach(counter => {
            ScrollTrigger.create({
                trigger: ".counters-grid",
                start: "top 80%",
                once: true,
                onEnter: () => {
                    const target = +counter.getAttribute('data-target');
                    gsap.to(counter, {
                        innerHTML: target,
                        duration: 2,
                        snap: { innerHTML: 1 },
                        ease: "power1.out"
                    });
                }
            });
        });
    }
});
