<?php 
$page_css = "../../assets/css/class1-premium.css";
include '../../includes/header.php'; 
?>

<!-- Custom CSS unique to Class 4 Layouts (Theme compliance) -->
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

/* Dashboard UI (Scene 10) */
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
</style>

<?php include '../../components/navbar.php'; ?>

<!-- 3D Scroll Tracking Elements (14 stops mapping) -->
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
        <img src="/assets/img/class4_hero.png" alt="Student focusing deeply" class="bg-image">
        <h1 class="c-title">Now Learning Becomes <br><span class="c-highlight">Serious</span></h1>
        <p class="c-subtitle">Class 4 Advanced Program – Aarsh Institute, Delhi</p>
        <div class="hero-btns" style="position: relative; z-index: 10;">
            <a href="#book" class="c-btn">Book Free Demo</a>
            <a href="#visit" class="c-btn c-btn-outline">Visit Center</a>
        </div>
    </div>

    <!-- SCENE 2: SHIFT IN LEVEL -->
    <div id="scene-2" class="c-scene">
        <h2 class="c-title emotional-text">Class 4 is where the real<br>academic journey<br>begins.</h2>
    </div>

    <!-- SCENE 3: CORE MESSAGE -->
    <div id="scene-3" class="c-scene">
        <h2 class="c-title">Stronger Concepts.<br>Better Focus.<br><span class="c-highlight">Real Progress.</span></h2>
    </div>

    <!-- SCENE 4: WHAT CHANGES IN CLASS 4 -->
    <div id="scene-4" class="c-scene">
        <div class="float-box" style="top: 20%; left: 10%;">450 ÷ 15</div>
        <div class="float-box" style="top: 70%; left: 20%;">Paragraphs</div>
        <div class="float-box" style="top: 30%; right: 15%;">Reasoning</div>
        <div class="float-box" style="top: 80%; right: 25%;">Diagrams</div>
        <h2 class="c-title">Logical reasoning.<br>Multi-step problem solving.</h2>
    </div>

    <!-- SCENE 5: LEARNING DEPTH (SPLIT SCREEN) -->
    <div id="scene-5" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Understanding, Not Memorizing</h2>
        <div class="split-container">
            <div class="split-box bad">
                <div style="font-size: 3rem; margin-bottom: 1rem;">❌</div>
                <h3>Ratta Learning</h3>
                <p>Blindly memorizing answers without understanding the "Why". Fails in complex exams.</p>
            </div>
            <div class="split-box good">
                <div style="font-size: 3rem; margin-bottom: 1rem;">✅</div>
                <h3>Concept Learning</h3>
                <p>Breaking down logic. Understanding deeply. Succeeds anywhere.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 6: TEACHING SYSTEM (ADVANCED) -->
    <div id="scene-6" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Advanced Teaching System</h2>
        <div class="c-grid">
            <div class="c-card">
                <h3>Concept Breakdown</h3>
                <p>Complex chapters broken into simple, digestible steps.</p>
            </div>
            <div class="c-card">
                <h3>Step-by-Step Logic</h3>
                <p>Focusing on 'how' to solve rather than just the answer.</p>
            </div>
            <div class="c-card">
                <h3>Practice Cycle</h3>
                <p>Heavy repetition for absolute memory perfection.</p>
            </div>
            <div class="c-card">
                <h3>Doubt Solving Focus</h3>
                <p>No student goes home with pending questions.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 7: DAILY STUDY FLOW (TIMELINE) -->
    <div id="scene-7" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">How We Build Daily Discipline</h2>
        <div class="timeline" style="width: 100%;">
            <div class="timeline-step">
                <h3 style="color: #ff416c;">1. Concept Learning</h3>
                <p>Deep dive into the chapter inside classroom.</p>
            </div>
            <div class="timeline-step">
                <h3 style="color: #ff416c;">2. Practice Questions</h3>
                <p>Active solving under teacher supervision.</p>
            </div>
            <div class="timeline-step">
                <h3 style="color: #ff416c;">3. Structured Homework</h3>
                <p>Application of learned concepts independently.</p>
            </div>
            <div class="timeline-step">
                <h3 style="color: #ff416c;">4. Weekly Review</h3>
                <p>Testing and doubt clearing to seal knowledge.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 8: SUBJECT EXPERIENCE -->
    <div id="scene-8" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Subject Experience</h2>
        <div class="c-grid">
            <div class="subject-block">
                <h3>Maths</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">Strong Calculation<br>Multi-step Operations<br>Advanced Arithmetic</p>
            </div>
            <div class="subject-block">
                <h3>English</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">Paragraph Writing<br>Reading Comprehension<br>Grammar Depth</p>
            </div>
            <div class="subject-block">
                <h3>EVS</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">Conceptual Geography<br>Science Foundations<br>Environment Rules</p>
            </div>
        </div>
    </div>

    <!-- SCENE 9: CLASSROOM EXPERIENCE -->
    <div id="scene-9" class="c-scene">
        <div class="bg-wrapper">
            <img src="/assets/img/premium_classroom.png" alt="Delhi Center Classroom">
        </div>
        <div class="content-overlay">
            <h2 class="c-title" style="margin-bottom:0;">A disciplined and result-focused<br>learning environment in Delhi</h2>
        </div>
    </div>

    <!-- SCENE 10: PERFORMANCE TRACKING (DASHBOARD UI) -->
    <div id="scene-10" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">We Track Every Child’s Progress</h2>
        <div class="dashboard-grid">
            <div class="dash-card">
                <h3 style="margin-bottom: 1rem; color: #ff416c;">Performance Analytics</h3>
                <div style="width: 100%; height: 15px; background: rgba(255,255,255,0.1); border-radius: 10px; margin-bottom: 1rem;"><div style="width: 85%; height: 100%; background: #00C9FF; border-radius: 10px;"></div></div>
                <div style="width: 100%; height: 15px; background: rgba(255,255,255,0.1); border-radius: 10px; margin-bottom: 1rem;"><div style="width: 60%; height: 100%; background: #ff416c; border-radius: 10px;"></div></div>
                <div style="width: 100%; height: 15px; background: rgba(255,255,255,0.1); border-radius: 10px;"><div style="width: 95%; height: 100%; background: #00C9FF; border-radius: 10px;"></div></div>
                <p style="margin-top: 2rem; color: var(--text-muted);">Real-time monitoring of test scores and improvement zones.</p>
            </div>
            <div class="dash-card">
                <h3 style="margin-bottom: 1rem; color: #00C9FF;">Parent Updates</h3>
                <ul style="list-style:none; padding:0; margin:0; line-height: 2;">
                    <li>📩 Weekly SMS</li>
                    <li>📊 Monthly PTM</li>
                    <li>📈 Digital Reports</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- SCENE 11: RESULTS -->
    <div id="scene-11" class="c-scene">
        <h2 class="c-title">Real Academic<br>Growth</h2>
        <div class="c-grid" style="margin-top: 3rem;">
            <div class="c-card">
                <div class="counter-val" data-target="2" style="font-size: 3rem; color :#00C9FF; display:inline-block; font-weight:bold;">0</div><span style="font-size: 3rem; color :#00C9FF; font-weight:bold;">X</span>
                <p>Faster solving speed.</p>
            </div>
            <div class="c-card">
                <div class="counter-val" data-target="95" style="font-size: 3rem; color :#ff416c; display:inline-block; font-weight:bold;">0</div><span style="font-size: 3rem; color :#ff416c; font-weight:bold;">%</span>
                <p>Average test accuracy.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 12: FEATURES -->
    <div id="scene-12" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Beyond The Classroom</h2>
        <div class="c-grid feature-grid">
            <div class="c-card feature-card"><div class="feat-icon" style="font-size: 2.5rem; color: #ff416c;">📝</div><h3>Daily Worksheets</h3></div>
            <div class="c-card feature-card"><div class="feat-icon" style="font-size: 2.5rem; color: #ff416c;">📊</div><h3>Weekly Tests</h3></div>
            <div class="c-card feature-card"><div class="feat-icon" style="font-size: 2.5rem; color: #ff416c;">❓</div><h3>Doubt Sessions</h3></div>
            <div class="c-card feature-card"><div class="feat-icon" style="font-size: 2.5rem; color: #ff416c;">👨‍👩‍👧</div><h3>Parent Reporting</h3></div>
            <div class="c-card feature-card"><div class="feat-icon" style="font-size: 2.5rem; color: #ff416c;">📋</div><h3>Mock Assessments</h3></div>
        </div>
    </div>

    <!-- SCENE 13: LOCAL TRUST -->
    <div id="scene-13" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Trusted by Parents Across Delhi</h2>
        <div class="c-grid">
            <div class="c-card testimonial-card" style="text-align: left;">
                <div style="font-size: 2rem; color: #ff416c; margin-bottom: 1rem;">"</div>
                <p style="font-style: italic; font-size: 1.2rem; margin-bottom: 1.5rem;">"He used to cry over Division rules. Now he solves them in seconds. Pure academic flip."</p>
                <div style="font-weight: bold; color: var(--clr-primary);">— Rajesh Khanna, Delhi</div>
            </div>
            <div class="c-card testimonial-card" style="text-align: left;">
                <div style="font-size: 2rem; color: #ff416c; margin-bottom: 1rem;">"</div>
                <p style="font-style: italic; font-size: 1.2rem; margin-bottom: 1.5rem;">"The weekly tests keep her extremely disciplined. Aarsh Institute handles everything perfectly."</p>
                <div style="font-weight: bold; color: var(--clr-primary);">— Sameera Das, Delhi</div>
            </div>
        </div>
    </div>

    <!-- SCENE 14: EMOTIONAL MOMENT -->
    <div id="scene-14" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 3rem;">Confidence comes from<br>understanding deeply.</h2>
        <p class="c-subtitle">Prepare Your Child for Academic Success</p>
        <div class="hero-btns" style="position: relative; z-index: 10;">
            <a href="#book" class="c-btn">Book Free Demo</a>
            <a href="#visit" class="c-btn c-btn-outline">Visit Center</a>
        </div>
    </div>

</main>

<script src="/assets/js/class4-scrolly.js"></script>

<?php include '../../includes/footer.php'; ?>
