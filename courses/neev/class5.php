<?php 
$page_css = "../../assets/css/class1-premium.css";
include '../../includes/header.php'; 
?>

<!-- Custom CSS unique to Layouts (Theme compliance) -->
<style>
/* Split Screen Comparison (Scene 5) */
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
    border-top: 5px solid #00C9FF;
}
@media(max-width: 768px) {
    .split-container { flex-direction: column; }
}

/* Timeline (Scene 7) */
.timeline {
    position: relative;
    max-width: 800px;
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
    background: var(--clr-primary);
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
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
/* Future Card (Scene 12) */
.future-card {
    background: var(--bg-card);
    border: 1px solid var(--clr-primary);
    box-shadow: var(--card-shadow);
    border-radius: 24px;
    padding: 3rem;
    text-align: center;
    transition: transform 0.4s ease;
}
</style>

<?php include '../../components/navbar.php'; ?>

<!-- 3D Scroll Tracking Elements (15 stops mapping) -->
<div class="premium-track-elements">
    <div id="premium-book" class="p-element" style="width: 15rem; height: 15rem; top: 10%; right: 20%; transform: rotate(25deg); z-index: 52;">
        <img src="/pandey/assets/img/book.png" alt="3D Book" onerror="this.src='https://cdn3d.iconscout.com/3d/premium/thumb/book-4993683-4163486.png';">
    </div>
    <div id="premium-pen" class="p-element" style="width: 12rem; height: 12rem; top: 15%; right: 10%; transform: rotate(10deg); z-index: 53;">
        <img src="/pandey/assets/img/pen.png" alt="3D Pen" onerror="this.src='https://cdn3d.iconscout.com/3d/premium/thumb/pen-5182414-4325492.png';">
    </div>
    <div id="premium-cap" class="p-element" style="width: 18rem; height: 18rem; top: 65%; right: 5%; transform: rotate(-25deg); z-index: 51;">
        <img src="/pandey/assets/img/cap.png" alt="3D Cap" onerror="this.src='https://cdn3d.iconscout.com/3d/premium/thumb/graduation-cap-5301826-4444583.png';">
    </div>
</div>

<main class="premium-body scene-container">

    <!-- SCENE 1: HERO -->
    <div id="scene-1" class="c-scene">
        <img src="/pandey/assets/img/class4_hero.png" alt="Student solving confidently and quickly" class="bg-image">
        <h1 class="c-title">Now Your Child Moves<br><span class="c-highlight">Ahead of the Class</span></h1>
        <p class="c-subtitle">Class 5 Excellence Program – Aarsh Institute, Delhi</p>
        <div class="hero-btns" style="position: relative; z-index: 10;">
            <a href="#book" class="c-btn">Book Free Demo</a>
            <a href="#visit" class="c-btn c-btn-outline">Visit Center</a>
        </div>
    </div>

    <!-- SCENE 2: BIG SHIFT -->
    <div id="scene-2" class="c-scene">
        <h2 class="c-title emotional-text">This is where average students fall behind...<br>and strong students<br>move ahead.</h2>
    </div>

    <!-- SCENE 3: CORE MESSAGE -->
    <div id="scene-3" class="c-scene">
        <h2 class="c-title">Speed.<br>Accuracy.<br><span class="c-highlight">Confidence.</span></h2>
    </div>

    <!-- SCENE 4: WHAT CHANGES IN CLASS 5 -->
    <div id="scene-4" class="c-scene">
        <!-- Floating Math/English fragments directly over viewport -->
        <div class="float-box" style="top: 20%; left: 10%;">45(15-2)</div>
        <div class="float-box" style="top: 70%; left: 20%;">Analysis</div>
        <div class="float-box" style="top: 30%; right: 15%;">Comprehension</div>
        <div class="float-box" style="top: 80%; right: 25%;">X = ?</div>
        <h2 class="c-title">Complex problem solving.<br>Fast analytical thinking.</h2>
    </div>

    <!-- SCENE 5: PERFORMANCE GAP (SPLIT SCREEN) -->
    <div id="scene-5" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">The Class 5 Transition Gap</h2>
        <div class="split-container">
            <div class="split-box bad">
                <div style="font-size: 3rem; margin-bottom: 1rem;">⚠️</div>
                <h3>Weak Foundation</h3>
                <ul style="list-style:none; padding:0; text-align:center;">
                    <li style="margin-bottom:0.5rem">Slow calculation</li>
                    <li style="margin-bottom:0.5rem">Confused by word problems</li>
                    <li style="margin-bottom:0.5rem">Low academic confidence</li>
                </ul>
            </div>
            <div class="split-box good">
                <div style="font-size: 3rem; margin-bottom: 1rem;">🚀</div>
                <h3>Aarsh Excellence</h3>
                <ul style="list-style:none; padding:0; text-align:center;">
                    <li style="margin-bottom:0.5rem">Fast computation</li>
                    <li style="margin-bottom:0.5rem">Clear concept application</li>
                    <li style="margin-bottom:0.5rem">Absolute confidence</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- SCENE 6: OUR SYSTEM (HIGH LEVEL) -->
    <div id="scene-6" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">The Excellence System</h2>
        <div class="c-grid">
            <div class="c-card">
                <h3>Concept Mastery</h3>
                <p>Complete theoretical clarity before applying.</p>
            </div>
            <div class="c-card">
                <h3>Speed Practice</h3>
                <p>Timed rounds to improve calculation reflexes.</p>
            </div>
            <div class="c-card">
                <h3>Accuracy Training</h3>
                <p>Re-checking frameworks to eliminate simple errors.</p>
            </div>
            <div class="c-card">
                <h3>Exam Preparation</h3>
                <p>Simulated environments for zero exam pressure.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 7: DAILY PERFORMANCE SYSTEM (TIMELINE) -->
    <div id="scene-7" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">How We Build Academic Strength Daily</h2>
        <div class="timeline" style="width: 100%;">
            <div class="timeline-step">
                <h3 style="color: #ff416c;">1. Concept Learning</h3>
                <p>Interactive deep-dive sessions with expert teachers.</p>
            </div>
            <div class="timeline-step">
                <h3 style="color: #ff416c;">2. Practice Sets</h3>
                <p>Targeted problem-solving logic.</p>
            </div>
            <div class="timeline-step">
                <h3 style="color: #ff416c;">3. Timed Questions</h3>
                <p>Building speed and eliminating hesitation.</p>
            </div>
            <div class="timeline-step">
                <h3 style="color: #ff416c;">4. Weekly Tests</h3>
                <p>Rigorous tracking to ensure constant progress.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 8: SUBJECT EXPERIENCE (EXPANDED) -->
    <div id="scene-8" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Subject Deep Dive</h2>
        <div class="c-grid">
            <div class="subject-block">
                <h3>Maths</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">Speed Calculation<br>Advanced Word Problems<br>Flawless Accuracy</p>
            </div>
            <div class="subject-block">
                <h3>English</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">Reading Comprehension<br>Grammar Mastery<br>Writing Clarity</p>
            </div>
            <div class="subject-block">
                <h3>EVS</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">Practical Logic<br>Environment Science<br>Real-World Connection</p>
            </div>
        </div>
    </div>

    <!-- SCENE 9: TEST & PERFORMANCE TRACKING -->
    <div id="scene-9" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">We Measure Real Progress</h2>
        <div class="dashboard-grid">
            <div class="dash-card">
                <h3 style="margin-bottom: 1rem; color: #ff416c;">Speed vs Accuracy Trend</h3>
                <div style="width: 100%; height: 15px; background: rgba(255,255,255,0.1); border-radius: 10px; margin-bottom: 1rem;"><div style="width: 95%; height: 100%; background: #00C9FF; border-radius: 10px;"></div></div>
                <div style="width: 100%; height: 15px; background: rgba(255,255,255,0.1); border-radius: 10px; margin-bottom: 1rem;"><div style="width: 80%; height: 100%; background: #ff416c; border-radius: 10px;"></div></div>
                <p style="margin-top: 2rem; color: var(--text-muted);">Consistent benchmarking ensuring students reach 95%+ accuracy within strict time limits.</p>
            </div>
            <div class="dash-card">
                <h3 style="margin-bottom: 1rem; color: #00C9FF;">Weekly Tracking</h3>
                <ul style="list-style:none; padding:0; margin:0; line-height: 2;">
                    <li>📉 Test Analysis</li>
                    <li>📊 Score Graphs</li>
                    <li>📩 Parent Briefs</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- SCENE 10: RESULTS -->
    <div id="scene-10" class="c-scene">
        <h2 class="c-title">Visible<br>Transformation</h2>
        <div class="c-grid" style="margin-top: 3rem;">
            <div class="c-card">
                <div class="counter-val" data-target="3" style="font-size: 3rem; color :#00C9FF; display:inline-block; font-weight:bold;">0</div><span style="font-size: 3rem; color :#00C9FF; font-weight:bold;">X</span>
                <p>Faster solving speed on average.</p>
            </div>
            <div class="c-card">
                <div class="counter-val" data-target="98" style="font-size: 3rem; color :#ff416c; display:inline-block; font-weight:bold;">0</div><span style="font-size: 3rem; color :#ff416c; font-weight:bold;">%</span>
                <p>Accuracy under pressure.</p>
            </div>
            <div class="c-card">
                <div class="counter-val" data-target="100" style="font-size: 3rem; color :#00C9FF; display:inline-block; font-weight:bold;">0</div><span style="font-size: 3rem; color :#00C9FF; font-weight:bold;">%</span>
                <p>Higher student confidence.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 11: FEATURES (EXPANDED) -->
    <div id="scene-11" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Beyond The Classroom</h2>
        <div class="c-grid feature-grid">
            <div class="c-card feature-card"><div class="feat-icon" style="font-size: 2.5rem; color: #ff416c;">📝</div><h3>Daily Worksheets</h3></div>
            <div class="c-card feature-card"><div class="feat-icon" style="font-size: 2.5rem; color: #ff416c;">⏱️</div><h3>Timed Practice</h3></div>
            <div class="c-card feature-card"><div class="feat-icon" style="font-size: 2.5rem; color: #ff416c;">❓</div><h3>Doubt Solving</h3></div>
            <div class="c-card feature-card"><div class="feat-icon" style="font-size: 2.5rem; color: #ff416c;">📈</div><h3>Performance Tracking</h3></div>
        </div>
    </div>

    <!-- SCENE 12: FUTURE PREPARATION -->
    <div id="scene-12" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Preparing for Class 6 and Beyond</h2>
        <div class="c-grid">
            <div class="future-card">
                <h3>Strong Foundation for Higher Limits</h3>
                <p>Every concept taught prepares the student for advanced algebra, critical reading, and high-pressure competitive exams.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 13: CLASSROOM EXPERIENCE (DELHI) -->
    <div id="scene-13" class="c-scene">
        <div class="bg-wrapper">
            <img src="/pandey/assets/img/premium_classroom.png" alt="Delhi Center Classroom">
        </div>
        <div class="content-overlay">
            <h2 class="c-title" style="margin-bottom:0;">A performance-driven learning<br>environment in Delhi</h2>
        </div>
    </div>

    <!-- SCENE 14: LOCAL TRUST -->
    <div id="scene-14" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Trusted by Hundreds of Families in Delhi</h2>
        <div class="c-grid">
            <div class="c-card testimonial-card" style="text-align: left;">
                <div style="font-size: 2rem; color: #ff416c; margin-bottom: 1rem;">"</div>
                <p style="font-style: italic; font-size: 1.2rem; margin-bottom: 1.5rem;">"We noticed a massive shift in his speed. He finishes tests 15 minutes early with full accuracy now."</p>
                <div style="font-weight: bold; color: var(--clr-primary);">— Ayesha Khan, Delhi</div>
            </div>
            <div class="c-card testimonial-card" style="text-align: left;">
                <div style="font-size: 2rem; color: #ff416c; margin-bottom: 1rem;">"</div>
                <p style="font-style: italic; font-size: 1.2rem; margin-bottom: 1.5rem;">"The weekly analytics are fantastic. Aarsh Institute treats education with the seriousness it deserves."</p>
                <div style="font-weight: bold; color: var(--clr-primary);">— Vikram Patel, Delhi</div>
            </div>
        </div>
    </div>

    <!-- SCENE 15: EMOTIONAL MOMENT -->
    <div id="scene-15" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 3rem;">Success is built<br>step by step.</h2>
        <p class="c-subtitle">Give Your Child the Advantage</p>
        <div class="hero-btns" style="position: relative; z-index: 10;">
            <a href="#book" class="c-btn">Book Free Demo</a>
            <a href="#visit" class="c-btn c-btn-outline">Visit Center</a>
        </div>
    </div>

</main>

<script src="/pandey/assets/js/class5-scrolly.js"></script>

<?php include '../../includes/footer.php'; ?>