<?php
// components/sections.php
?>
<main class="main-content">
    
    <!-- Hero Section -->
    <section class="hero-section" id="hero" style="position:relative;">
        <div class="hero-content container">
            <h1 class="hero-title">Transform Your Future with <span class="highlight">Aarsh Institute</span></h1>
            <div class="hero-buttons">
                <a href="#centers" class="btn btn-primary glow-effect">Join Offline Classes</a>
                <a href="#courses" class="btn btn-secondary glow-effect">Explore Courses</a>
            </div>
        </div>
        <!-- Floating Elements for Pen Animation -->
        <img id="pen-main" src="assets/img/pen.png" alt="Pen" style="position: absolute; width: 25%; z-index: 10; top: 15%; right: 5%; transition: all cubic-bezier(0.19, 1, 0.22, 1) 0.5s; mix-blend-mode: multiply; pointer-events:none;">
        <img id="book-element" src="assets/img/book.png" alt="Book" style="position: absolute; width: 15%; z-index: 5; top: 10%; right: 25%; transition: all cubic-bezier(0.19, 1, 0.22, 1) 0.5s; mix-blend-mode: multiply; pointer-events:none;">
        <img id="cap-element" src="assets/img/cap.png" alt="Cap" style="position: absolute; width: 12%; z-index: 4; top: 60%; right: -5%; transition: all cubic-bezier(0.19, 1, 0.22, 1) 0.5s; mix-blend-mode: multiply; pointer-events:none;">
    </section>

    <!-- About Section -->
    <section class="about-section scroll-section" id="about">
        <div class="container">
            <div class="section-header">
                <h2>About <span class="highlight">Us</span></h2>
                <p>Decades of excellence in guiding students to top-tier institutions.</p>
            </div>
            <div class="counters-grid">
                <div class="counter-box">
                    <h3 class="counter-value" data-target="50000">0</h3><span>+</span>
                    <p>Students Mentored</p>
                </div>
                <div class="counter-box">
                    <h3 class="counter-value" data-target="10000">0</h3><span>+</span>
                    <p>Selections</p>
                </div>
                <div class="counter-box">
                    <h3 class="counter-value" data-target="95">0</h3><span>%</span>
                    <p>Success Rate</p>
                </div>
                <div class="counter-box">
                    <h3 class="counter-value" data-target="50">0</h3><span>+</span>
                    <p>Expert Faculty</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section class="courses-section scroll-section" id="courses">
        <div class="container">
            <div class="section-header">
                <h2>Our <span class="highlight">Courses</span></h2>
                <p>Comprehensive programs tailored for competitive exams.</p>
            </div>
            <div class="cards-grid">
                <div class="course-card hover-lift" id="card-left">
                    <div class="course-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div>
                    <h3>Foundation (9th & 10th)</h3>
                    <p>Build a strong base for future competitive exams with our expert guidance.</p>
                    <a href="#" class="btn-link">Learn More &rarr;</a>
                </div>
                <div class="course-card hover-lift" id="card-center">
                    <div class="course-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
                    <h3>Target JEE (Main & Adv)</h3>
                    <p>Rigorous preparation for India's toughest engineering entrance exams.</p>
                    <a href="#" class="btn-link">Learn More &rarr;</a>
                </div>
                <div class="course-card hover-lift" id="card-right">
                    <div class="course-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg></div>
                    <h3>Target NEET (UG)</h3>
                    <p>Comprehensive syllabus coverage focusing on medical entrance exams.</p>
                    <a href="#" class="btn-link">Learn More &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Offline Centers Section -->
    <section class="centers-section scroll-section" id="centers">
        <div class="container">
            <div class="section-header">
                <h2>Offline <span class="highlight">Centers</span></h2>
                <p>State-of-the-art facilities designed for focused learning.</p>
            </div>
            <div class="centers-layout">
                <div class="centers-list">
                    <div class="center-card active">
                        <h4>Delhi HQ Center</h4>
                        <p>123 Education Hub, Knowledge Park, Delhi</p>
                    </div>
                    <div class="center-card">
                        <h4>Kota Branch</h4>
                        <p>45 Success Avenue, Instruction Lane, Kota</p>
                    </div>
                </div>
                <div class="center-map">
                    <div class="map-placeholder">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112000!2d77.1000!3d28.6000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDM2JzAwLjAiTiA3N8KwMDYnMDAuMCJF!5e0!3m2!1sen!2sin!4v1600000000000!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Results Section -->
    <section class="results-section scroll-section" id="testimonials">
        <div class="container">
            <div class="section-header">
                <h2>Our <span class="highlight">Results</span></h2>
                <p>Hear from our top achievers and rank holders.</p>
            </div>
            <div class="carousel-container" id="resultsCarousel">
                <div class="carousel-track">
                    <div class="carousel-slide">
                        <div class="testimonial-card">
                            <div class="quote-icon">"</div>
                            <p>Aarsh Institute provided me with the best study material and faculty support. I cracked JEE with an AIR 45.</p>
                            <h4>Rahul S.</h4>
                            <span>IIT Bombay</span>
                        </div>
                    </div>
                    <div class="carousel-slide">
                        <div class="testimonial-card">
                            <div class="quote-icon">"</div>
                            <p>The mock tests and doubt-clearing sessions at Aarsh were the key to my success in NEET.</p>
                            <h4>Priya M.</h4>
                            <span>AIIMS Delhi</span>
                        </div>
                    </div>
                    <div class="carousel-slide">
                        <div class="testimonial-card">
                            <div class="quote-icon">"</div>
                            <p>Excellent environment for focused study. The teachers genuinely care about your performance.</p>
                            <h4>Aditya K.</h4>
                            <span>NIT Trichy</span>
                        </div>
                    </div>
                </div>
                <div class="carousel-controls">
                    <button class="prev-btn">&larr;</button>
                    <button class="next-btn">&rarr;</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section scroll-section" id="features">
        <div class="container">
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg></div>
                    <h4>Updated Material</h4>
                    <p>Curated by experts to match the latest exam patterns.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></div>
                    <h4>Regular Mock Tests</h4>
                    <p>Detailed performance analysis to track your growth.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></div>
                    <h4>Doubt Sessions</h4>
                    <p>One-on-one sessions for complete clarity.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section scroll-section" id="contact">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Start Your Journey?</h2>
                <p>Join Aarsh Institute today and take the first step towards a brilliant career.</p>
                <a href="#centers" class="btn btn-primary btn-large pulse-effect">Visit Center Today</a>
            </div>
        </div>
    </section>
</main>
