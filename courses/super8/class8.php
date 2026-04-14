<?php 
$page_css = "../../assets/css/class1-premium.css";
include '../../includes/header.php'; 
?>

<!-- Custom CSS unique to Layouts (Theme compliance) -->
<style>
/* Split Screen (Scene 5 Logic) */
.split-container {
    display: flex;
    gap: 2rem;
    width: 100%;
    max-width: 1000px;
}
.split-box {
    flex: 1;
    background: var(--bg-card);
    border: 1px solid var(--border-clr);
    box-shadow: var(--card-shadow);
    border-radius: 24px;
    padding: 3rem 2rem;
    text-align: center;
}
.split-box.bad {
    border-top: 5px solid #ff4b2b;
}
.split-box.good {
    border-top: 5px solid #FFD700;
}
@media(max-width: 768px) {
    .split-container { flex-direction: column; }
}

/* Timeline (Scene 8) */
.timeline {
    position: relative;
    max-width: 1000px;
    margin: 0 auto;
    padding: 2rem 0;
}
.timeline::before {
    content: '';
    position: absolute;
    width: 4px;
    background: var(--border-clr);
    top: 0; bottom: 0; left: 50%;
    transform: translateX(-50%);
}
.timeline-step {
    padding: 2rem 3rem;
    background: var(--bg-card);
    border-radius: 20px;
    width: 45%;
    position: relative;
    margin-bottom: 2rem;
    border: 1px solid var(--border-clr);
}
.timeline-step:nth-child(odd) { left: 0; margin-left: auto; }
.timeline-step:nth-child(even) { left: 55%; }
.timeline-step::after {
    content: '';
    position: absolute;
    width: 20px; height: 20px;
    background: #FF003C;
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
    box-shadow: 0 0 15px #FF003C;
}
.timeline-step:nth-child(odd)::after { right: -11%; }
.timeline-step:nth-child(even)::after { left: -11%; }

@media(max-width: 768px) {
    .timeline::before { left: 20px; }
    .timeline-step { width: 80%; left: 50px !important; margin-left: 0; }
    .timeline-step::after { left: -40px !important; right: auto; }
}

/* Dashboard UI (Scene 9) */
.dashboard-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 2rem;
    width: 100%;
    max-width: 1100px;
}
.dash-card {
    background: var(--bg-card);
    border: 1px solid var(--border-clr);
    border-radius: 20px;
    padding: 2rem;
    text-align: left;
}
@media(max-width: 768px) {
    .dashboard-grid { grid-template-columns: 1fr; }
}

/* Future Card (Scene 11 & 12) */
.future-card {
    background: var(--bg-card);
    border: 1px solid #FFD700;
    box-shadow: 0 10px 40px rgba(255,215,0,0.1);
    border-radius: 24px;
    padding: 3rem;
    text-align: center;
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}
.future-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 50px rgba(255,215,0,0.2);
}

/* High Speed Trail for 3D Elements */
.p-element {
    filter: drop-shadow(0px 0px 15px rgba(255, 215, 0, 0.4));
    transition: filter 0.3s ease;
}

.c-btn-gold {
    background: linear-gradient(90deg, #FFD700, #FFAA00);
    color: #000;
    font-weight: 800;
    box-shadow: 0 10px 30px rgba(255, 215, 0, 0.4);
}
.c-btn-gold:hover {
    box-shadow: 0 15px 40px rgba(255, 215, 0, 0.6);
    transform: scale(1.05);
}
</style>

<?php include '../../components/navbar.php'; ?>

<!-- 3D Scroll Tracking Elements -->
<div class="premium-track-elements">
    <div id="premium-book" class="p-element" style="width: 15rem; height: 15rem; top: 10%; right: 20%; transform: rotate(25deg); z-index: 52;">
        <img src="/assets/img/book.png" alt="3D Book" onerror="this.src='https://cdn3d.iconscout.com/3d/premium/thumb/book-4993683-4163486.png';">
    </div>
    <div id="premium-pen" class="p-element" style="width: 12rem; height: 12rem; top: 15%; right: 10%; transform: rotate(10deg); z-index: 53;">
        <img src="/assets/img/pen.png" alt="3D Pen" onerror="this.src='https://cdn3d.iconscout.com/3d/premium/thumb/pen-5182414-4325492.png';">
    </div>
    <div id="premium-cap" class="p-element" style="width: 18rem; height: 18rem; top: 65%; right: 5%; transform: rotate(-25deg); z-index: 51;">
        <img src="/assets/img/cap.png" alt="3D Cap" onerror="this.src='https://cdn3d.iconscout.com/3d/premium/thumb/graduation-cap-5301826-4444583.png';">
    </div>
</div>

<main class="premium-body scene-container">

    <!-- SCENE 1: HERO -->
    <div id="scene-1" class="c-scene">
        <img src="/assets/img/class5_hero.png" alt="Class 8 Student" class="bg-image" style="filter: brightness(0.7) contrast(1.2);">
        <h1 class="c-title" style="text-transform: uppercase; font-weight: 900; font-size: 5rem; line-height: 1.1;">This Is Where Real<br><span style="color: #FFD700;">Preparation Begins</span></h1>
        <p class="c-subtitle" style="font-weight: 500; letter-spacing: 2px;">Class 8 (Super 8 Final Level) – Aarsh Institute, Delhi</p>
        <div class="hero-btns" style="position: relative; z-index: 10;">
            <a href="#join" class="c-btn c-btn-gold">Join Super 8 Final Batch</a>
            <a href="#visit" class="c-btn c-btn-outline" style="border-color: #FF003C; color: #fff; background: rgba(255,0,60,0.1);">Book Free Demo</a>
        </div>
    </div>

    <!-- SCENE 2: HARD TRUTH -->
    <div id="scene-2" class="c-scene">
        <h2 class="c-title emotional-text" style="color: #FF003C; font-size: 4rem;">Most students struggle in Class 9…<br><span style="color: var(--text-color);">because Class 8 was weak.</span></h2>
    </div>

    <!-- SCENE 3: CORE MESSAGE -->
    <div id="scene-3" class="c-scene">
        <h2 class="c-title" style="font-size: 6rem; line-height: 1;">Speed.<br>Accuracy.<br><span style="color: #FFD700;">Mastery.</span></h2>
    </div>

    <!-- SCENE 4: REALITY OF CLASS 8 (FLOATERS) -->
    <div id="scene-4" class="c-scene">
        <div class="float-box" style="top: 20%; left: 10%; border-color: #FF003C; color: #FF003C;">Concepts become complex</div>
        <div class="float-box" style="top: 70%; left: 20%; border-color: #FF003C; color: #FF003C;">Competition becomes real</div>
        <div class="float-box" style="top: 30%; right: 15%; border-color: #FF003C; color: #FF003C;">Weak students fall behind</div>
        <div class="float-box" style="top: 80%; right: 25%; border-color: #FFD700; color: #FFD700;">Logic demands focus</div>
        <h2 class="c-title">The Foundation Layer<br>For Board Exams</h2>
    </div>

    <!-- SCENE 5: OUR SYSTEM (SPLIT SCREEN) -->
    <div id="scene-5" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">We build strong students before Class 9</h2>
        <div class="split-container">
            <div class="split-box good" style="border-top-color: #FF003C;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">🔥</div>
                <h3>Strong Concept Clarity</h3>
                <p>Decoding advanced chapters structurally.</p>
            </div>
            <div class="split-box good" style="border-top-color: #FFD700;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">⚡</div>
                <h3>Performance Focus</h3>
                <p>Building high-speed execution & precision.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 6: SUBJECT DEPTH -->
    <div id="scene-6" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Class 8 Subject Depth (High Level)</h2>
        <div class="c-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
            <div class="subject-block" style="border-color: #FFD700;">
                <h3>Maths</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">Algebra basics<br>Advanced problem solving<br>Speed + accuracy</p>
            </div>
            <div class="subject-block" style="border-color: #FF003C;">
                <h3>Science</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">Physics concepts<br>Chemistry basics<br>Logical understanding</p>
            </div>
            <div class="subject-block" style="border-color: #00C9FF;">
                <h3>English</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">Advanced grammar<br>Writing clarity<br>Comprehension mastery</p>
            </div>
        </div>
    </div>

    <!-- SCENE 7: PERFORMANCE TRAINING -->
    <div id="scene-7" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Performance Training</h2>
        <div class="c-grid">
            <div class="c-card" style="box-shadow: 0 0 20px rgba(255,0,60,0.1);">
                <h3>Timed Problem Solving</h3>
                <p>Simulating exam conditions to eradicate panic.</p>
            </div>
            <div class="c-card" style="box-shadow: 0 0 20px rgba(255,215,0,0.1);">
                <h3>Accuracy Training</h3>
                <p>Zero tolerance for silly calculation mistakes.</p>
            </div>
            <div class="c-card" style="box-shadow: 0 0 20px rgba(0,201,255,0.1);">
                <h3>Speed Improvement</h3>
                <p>Mental shortcuts to save crucial exam minutes.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 8: DAILY SYSTEM -->
    <div id="scene-8" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">How We Build<br><span style="color: #FFD700;">High Performers</span></h2>
        <div class="timeline" style="width: 100%;">
            <div class="timeline-step">
                <h3 style="color: #FF003C;">1. Concept</h3>
                <p>Deep foundational understanding.</p>
            </div>
            <div class="timeline-step">
                <h3 style="color: #FFD700;">2. Practice</h3>
                <p>High-volume, targeted exercises.</p>
            </div>
            <div class="timeline-step">
                <h3 style="color: #00C9FF;">3. Test</h3>
                <p>Performance under actual strict timing limits.</p>
            </div>
            <div class="timeline-step">
                <h3 style="color: #FF003C;">4. Analysis</h3>
                <p>Granular breakdown of incorrect answers.</p>
            </div>
            <div class="timeline-step">
                <h3 style="color: #FFD700;">5. Improvement</h3>
                <p>Permanent elimination of weak spots.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 9: ANALYTICS SYSTEM -->
    <div id="scene-9" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">We Track Everything</h2>
        <div class="dashboard-grid">
            <div class="dash-card" style="border-color: rgba(255,215,0,0.3);">
                <h3 style="margin-bottom: 1rem; color: #FFD700;">Performance Trajectory</h3>
                <div style="width: 100%; height: 15px; background: rgba(255,255,255,0.1); border-radius: 10px; margin-bottom: 1rem;"><div style="width: 95%; height: 100%; background: #FFD700; border-radius: 10px; box-shadow: 0 0 10px #FFD700;"></div></div>
                <div style="width: 100%; height: 15px; background: rgba(255,255,255,0.1); border-radius: 10px; margin-bottom: 1rem;"><div style="width: 88%; height: 100%; background: #00C9FF; border-radius: 10px;"></div></div>
                <div style="width: 100%; height: 15px; background: rgba(255,255,255,0.1); border-radius: 10px; margin-bottom: 1rem;"><div style="width: 82%; height: 100%; background: #FF003C; border-radius: 10px;"></div></div>
                <p style="margin-top: 2rem; color: var(--text-muted);">Data-driven insights to guarantee continuous growth.</p>
            </div>
            <div class="dash-card" style="border-color: rgba(255,0,60,0.3);">
                <h3 style="margin-bottom: 1rem; color: #FF003C;">Dashboard Metrics</h3>
                <ul style="list-style:none; padding:0; margin:0; line-height: 2;">
                    <li>📊 Test Scores</li>
                    <li>⏱️ Speed Tracking</li>
                    <li>🎯 Accuracy Improvement</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- SCENE 10: RESULTS -->
    <div id="scene-10" class="c-scene">
        <h2 class="c-title">Real<br><span style="color: #FFD700;">Transformation</span></h2>
        <div class="c-grid" style="margin-top: 3rem;">
            <div class="c-card">
                <div class="counter-val" data-target="3" style="font-size: 4rem; color :#FFD700; display:inline-block; font-weight:900;">0</div><span style="font-size: 3rem; color :#FFD700; font-weight:bold;">X</span>
                <p style="font-size: 1.2rem; font-weight: bold;">Faster solving speed.</p>
            </div>
            <div class="c-card">
                <div class="counter-val" data-target="98" style="font-size: 4rem; color :#FF003C; display:inline-block; font-weight:900;">0</div><span style="font-size: 3rem; color :#FF003C; font-weight:bold;">%</span>
                <p style="font-size: 1.2rem; font-weight: bold;">Higher accuracy.</p>
            </div>
            <div class="c-card">
                <div class="counter-val" data-target="100" style="font-size: 4rem; color :#00C9FF; display:inline-block; font-weight:900;">0</div><span style="font-size: 3rem; color :#00C9FF; font-weight:bold;">%</span>
                <p style="font-size: 1.2rem; font-weight: bold;">Strong confidence.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 11: FUTURE IMPACT -->
    <div id="scene-11" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Preparing for Class 9–10 & Beyond</h2>
        <div class="c-grid">
            <div class="future-card" style="border-color: #00C9FF; box-shadow: 0 10px 40px rgba(0,201,255,0.1);">
                <h3>Strong Base For Boards</h3>
                <p>Class 8 concepts are directly injected into 10th-grade mechanics. Weakness here guarantees failure there.</p>
            </div>
            <div class="future-card" style="border-color: #FFD700; box-shadow: 0 10px 40px rgba(255,215,0,0.1);">
                <h3>Early Competitive Advantage</h3>
                <p>While others struggle with basics in 9th, Aarsh students are already executing advanced problem-solving.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 12: SUPER 8 FINAL ADVANTAGE -->
    <div id="scene-12" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem; color: #FF003C;">Why This Batch Matters</h2>
        <div class="c-grid">
            <div class="c-card" style="text-align: left;">
                <h3 style="color:#FFD700;">Final Foundation Stage</h3>
                <p>It is the absolute last chance to hardwire basics before the exam marathon begins.</p>
            </div>
            <div class="c-card" style="text-align: left;">
                <h3 style="color:#FFD700;">High-Performance System</h3>
                <p>Not just studying, but actively training to operate at peak academic efficiency.</p>
            </div>
            <div class="c-card" style="text-align: left;">
                <h3 style="color:#FFD700;">Serious Environment</h3>
                <p>Surrounded by students and mentors who operate identically to achieve maximum scoring.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 13: CLASSROOM EXPERIENCE (DELHI) -->
    <div id="scene-13" class="c-scene">
        <div class="bg-wrapper">
            <img src="/assets/img/premium_classroom.png" alt="Delhi Center Classroom">
        </div>
        <div class="content-overlay">
            <h2 class="c-title" style="margin-bottom:0; font-size: 3.5rem;">A serious learning environment<br><span style="color: #FFD700;">for serious students in Delhi</span></h2>
        </div>
    </div>

    <!-- SCENE 14: TRUST -->
    <div id="scene-14" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Trusted By Achievers</h2>
        <div class="c-grid">
            <div class="c-card testimonial-card" style="text-align: left; border-left: 4px solid #FFD700;">
                <div style="font-size: 3rem; color: #FFD700; margin-bottom: 0;">"</div>
                <p style="font-style: italic; font-size: 1.2rem; margin-bottom: 1.5rem;">"We noticed a massive shift in his speed. He solves complex Algebra without asking for help. The tracking system is incredible."</p>
                <div style="font-weight: bold; color: var(--clr-primary);">— Rajesh Singh, Parent</div>
            </div>
            <div class="c-card testimonial-card" style="text-align: left; border-left: 4px solid #FF003C;">
                <div style="font-size: 3rem; color: #FF003C; margin-bottom: 0;">"</div>
                <p style="font-style: italic; font-size: 1.2rem; margin-bottom: 1.5rem;">"Class 8 here is intense but brilliant. They didn't just teach Science, they taught me how to think logically."</p>
                <div style="font-weight: bold; color: var(--clr-primary);">— Ananya, Student</div>
            </div>
        </div>
    </div>

    <!-- SCENE 15: EMOTIONAL IMPACT & FINAL CTA -->
    <div id="scene-15" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 2rem; font-size: 4rem;">Your child’s future is decided by the<br><span style="color: #FF003C;">foundation built today.</span></h2>
        <p class="c-subtitle" style="font-size: 1.5rem; color: #FFD700; margin-bottom: 3rem; font-weight: bold;">Prepare Your Child for Class 9 Success</p>
        <div class="hero-btns" style="position: relative; z-index: 10;">
            <a href="#join" class="c-btn c-btn-gold">Join Super 8 Final Batch</a>
            <a href="#visit" class="c-btn c-btn-outline" style="border-color: #00C9FF; color: #00C9FF;">Visit Center</a>
        </div>
    </div>

</main>

<script src="/assets/js/class8-scrolly.js"></script>

<?php include '../../includes/footer.php'; ?>
