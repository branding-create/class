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
    transition: filter 0.2s ease, transform 0.1s ease-out;
}

/* Glowing Bee specific effects */
#premium-bee {
    filter: drop-shadow(0px 0px 25px rgba(255, 215, 0, 0.8)) brightness(1.2);
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

/* Float Boxes for Scene 4 */
.float-box {
    position: absolute;
    padding: 1.5rem 2.5rem;
    background: rgba(0, 0, 0, 0.6);
    border: 2px solid;
    border-radius: 12px;
    font-size: 1.8rem;
    font-weight: bold;
    backdrop-filter: blur(10px);
    opacity: 0;
    z-index: 5;
    box-shadow: 0 10px 30px rgba(0,0,0,0.5);
}

/* Red intense text */
.intense-text {
    color: #FF003C;
    text-shadow: 0 0 20px rgba(255, 0, 60, 0.3);
}

/* Responsive intense typography classes */
.t-hero { font-size: clamp(3.5rem, 8vw, 6rem); }
.t-huge { font-size: clamp(3rem, 7vw, 7rem); }
.t-large { font-size: clamp(2.2rem, 5vw, 5rem); }
.t-medium { font-size: clamp(2rem, 4vw, 4rem); }
.t-span { font-size: clamp(2.5rem, 6vw, 5rem); }

@media(max-width: 768px) {
    .float-box {
        font-size: 1.2rem;
        padding: 1rem 1.5rem;
    }
    .hero-btns .c-btn {
        padding: 1rem 1.5rem !important;
        font-size: 1rem !important;
        margin-bottom: 1rem;
    }
}
</style>

<?php include '../../components/navbar.php'; ?>

<!-- 3D Scroll Tracking Elements -->
<div class="premium-track-elements">
    <div id="premium-bee" class="p-element" style="width: 14rem; height: 14rem; top: 10%; right: 20%; transform: rotate(15deg); z-index: 55;">
        <img src="/assets/img/bee.png" alt="3D Bee" onerror="this.src='https://cdn3d.iconscout.com/3d/premium/thumb/bee-5206979-4352358.png';">
    </div>
</div>

<main class="premium-body scene-container">

    <!-- SCENE 1: HERO -->
    <div id="scene-1" class="c-scene">
        <img src="/assets/img/class5_hero.png" alt="Class 9 Student" class="bg-image" style="filter: brightness(0.6) contrast(1.2);">
        <h1 class="c-title t-hero" style="text-transform: uppercase; font-weight: 900; line-height: 1.1;">This Is Where <br><span style="color: #FFD700;">Toppers Are Built</span></h1>
        <p class="c-subtitle" style="font-weight: 500; letter-spacing: 2px; font-size: clamp(1.2rem, 3vw, 1.6rem); margin-top: 1.5rem;">Class 9 Samarpan Batch – Aarsh Institute, Delhi</p>
        <div class="hero-btns" style="position: relative; z-index: 10; margin-top: 2rem;">
            <a href="#join" class="c-btn c-btn-gold">Join Samarpan Batch</a>
            <a href="#visit" class="c-btn c-btn-outline" style="border-color: #FF003C; color: #fff; background: rgba(255,0,60,0.1);">Book Free Demo</a>
        </div>
    </div>

    <!-- SCENE 2: HARD TRUTH -->
    <div id="scene-2" class="c-scene">
        <h2 class="c-title emotional-text t-medium" style="color: #FFD700; font-weight: 900; text-shadow: 0 10px 30px rgba(255,215,0,0.2);">Class 10 results are decided<br><span class="t-span" style="color: var(--text-color);">in Class 9.</span></h2>
    </div>

    <!-- SCENE 3: CORE MESSAGE -->
    <div id="scene-3" class="c-scene">
        <h2 class="c-title t-huge" style="line-height: 1.1; font-weight: 900;">Discipline.<br>Consistency.<br><span style="color: #FF003C;">Performance.</span></h2>
    </div>

    <!-- SCENE 4: REALITY CHECK (FLOATERS) -->
    <div id="scene-4" class="c-scene">
        <div class="float-box" style="top: 20%; left: 8%; border-color: #FF003C; color: #FF003C; font-family: monospace;">F = G(m₁m₂)/r²</div>
        <div class="float-box" style="top: 70%; left: 15%; border-color: #00C9FF; color: #00C9FF;">Syllabus becomes heavy</div>
        <div class="float-box" style="top: 25%; right: 10%; border-color: #FFD700; color: #FFD700;">Concepts become deeper</div>
        <div class="float-box" style="top: 75%; right: 18%; border-color: #FF003C; color: #FF003C; font-family: monospace;">(x+y)² = x² + y² + 2xy</div>
        <h2 class="c-title">The Reality Check<br>Of Class 9</h2>
        <p class="c-subtitle" style="font-size: 1.5rem; max-width: 600px; margin: 2rem auto 0; color: var(--text-muted);">Competition becomes real. Casual study routines will no longer work.</p>
    </div>

    <!-- SCENE 5: OUR SYSTEM -->
    <div id="scene-5" class="c-scene">
        <h2 class="c-title t-medium" style="color: #FFD700;">We don’t prepare students…</h2>
        <h2 class="c-title t-large" style="font-weight: 900;">We build <span style="color: #FF003C;">performers.</span></h2>
        <p class="c-subtitle" style="font-size: clamp(1.2rem, 3vw, 1.5rem); max-width: 700px; margin: 2rem auto 0; color: var(--text-muted);">A structured, disciplined academic system led by expert faculty.</p>
    </div>

    <!-- SCENE 6: SUBJECT DEPTH -->
    <div id="scene-6" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Subject Depth (Board Foundation)</h2>
        <div class="c-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
            <div class="subject-block" style="border-color: #FFD700;">
                <h3>Maths</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">Algebra Mastery<br>Geometry Proofs<br>Complex Problem Solving</p>
            </div>
            <div class="subject-block" style="border-color: #00C9FF;">
                <h3>Science</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">Logical Physics concepts<br>Core Chemistry basics<br>Deep Biology understanding</p>
            </div>
            <div class="subject-block" style="border-color: #FF003C;">
                <h3>English</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">Analytical Writing skills<br>Advanced Grammar<br>Comprehension</p>
            </div>
        </div>
    </div>

    <!-- SCENE 7: BOARD PREPARATION SYSTEM -->
    <div id="scene-7" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Board Preparation System</h2>
        <div class="c-grid">
            <div class="c-card" style="box-shadow: 0 0 20px rgba(255,215,0,0.1);">
                <h3>Concept Clarity</h3>
                <p>Breaking down complex syllabus into logical chapters.</p>
            </div>
            <div class="c-card" style="box-shadow: 0 0 20px rgba(0,201,255,0.1);">
                <h3>Practice Sheets</h3>
                <p>High-volume execution to build muscle memory.</p>
            </div>
            <div class="c-card" style="box-shadow: 0 0 20px rgba(255,0,60,0.1);">
                <h3>Test Series</h3>
                <p>Continuous simulated exams to kill fear.</p>
            </div>
            <div class="c-card" style="box-shadow: 0 0 20px rgba(255,215,0,0.1);">
                <h3>Revision Cycles</h3>
                <p>Zero forgetting curve with strategic repetitions.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 8: DAILY SYSTEM -->
    <div id="scene-8" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">How Toppers<br><span style="color: #FFD700;">Study Daily</span></h2>
        <div class="timeline" style="width: 100%;">
            <div class="timeline-step">
                <h3 style="color: #FF003C;">1. Concept</h3>
                <p>Laser focus in the classroom.</p>
            </div>
            <div class="timeline-step">
                <h3 style="color: #FFD700;">2. Practice</h3>
                <p>Immediate application of theoretical knowledge.</p>
            </div>
            <div class="timeline-step">
                <h3 style="color: #00C9FF;">3. Test</h3>
                <p>Weekly assessment of retained information.</p>
            </div>
            <div class="timeline-step">
                <h3 style="color: #FF003C;">4. Analysis</h3>
                <p>Detailed tracking of where marks are lost.</p>
            </div>
            <div class="timeline-step">
                <h3 style="color: #FFD700;">5. Improvement</h3>
                <p>Fixing vulnerabilities before they multiply.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 9: ANALYTICS SYSTEM -->
    <div id="scene-9" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Performance Tracking</h2>
        <div class="dashboard-grid">
            <div class="dash-card" style="border-color: rgba(255,215,0,0.3);">
                <h3 style="margin-bottom: 1rem; color: #FFD700;">Accuracy Tracking</h3>
                <div style="width: 100%; height: 15px; background: rgba(255,255,255,0.1); border-radius: 10px; margin-bottom: 1rem;"><div style="width: 98%; height: 100%; background: #FFD700; border-radius: 10px; box-shadow: 0 0 10px #FFD700;"></div></div>
                <div style="width: 100%; height: 15px; background: rgba(255,255,255,0.1); border-radius: 10px; margin-bottom: 1rem;"><div style="width: 82%; height: 100%; background: #00C9FF; border-radius: 10px;"></div></div>
                <div style="width: 100%; height: 15px; background: rgba(255,255,255,0.1); border-radius: 10px; margin-bottom: 1rem;"><div style="width: 90%; height: 100%; background: #FF003C; border-radius: 10px;"></div></div>
                <p style="margin-top: 2rem; color: var(--text-muted);">Dashboard-style visuals identifying strong and weak concepts instantly.</p>
            </div>
            <div class="dash-card" style="border-color: rgba(255,0,60,0.3);">
                <h3 style="margin-bottom: 1rem; color: #FF003C;">Key Metrics</h3>
                <ul style="list-style:none; padding:0; margin:0; line-height: 2;">
                    <li>📊 Test Scores</li>
                    <li>🎯 Weak Area Improvement</li>
                    <li>⏱️ Exam Timing</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- SCENE 10: RESULTS -->
    <div id="scene-10" class="c-scene">
        <h2 class="c-title t-medium">Real Academic<br><span style="color: #FFD700;">Growth</span></h2>
        <div class="c-grid" style="margin-top: 3rem;">
            <div class="c-card">
                <div class="t-medium" style="color :#FFD700; font-weight:900;">A+</div>
                <p style="font-size: 1.2rem; font-weight: bold;">Better marks in school.</p>
            </div>
            <div class="c-card">
                <div class="t-medium" style="color :#FF003C; font-weight:900;">✓</div>
                <p style="font-size: 1.2rem; font-weight: bold;">Strong concepts.</p>
            </div>
            <div class="c-card">
                <div class="counter-val t-medium" data-target="100" style="color :#00C9FF; display:inline-block; font-weight:900;">0</div><span class="t-medium" style="color :#00C9FF; font-weight:bold;">%</span>
                <p style="font-size: 1.2rem; font-weight: bold;">High confidence.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 11: SAMARPAN ADVANTAGE -->
    <div id="scene-11" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Why Samarpan Batch?</h2>
        <div class="c-grid">
            <div class="c-card" style="text-align: left; border-top: 4px solid #FFD700;">
                <h3 style="color:#FFD700;">Dedicated Preparation</h3>
                <p>A completely enclosed environment where board syllabus and foundational competitive concepts merge.</p>
            </div>
            <div class="c-card" style="text-align: left; border-top: 4px solid #00C9FF;">
                <h3 style="color:#00C9FF;">Structured Learning</h3>
                <p>Everything is planned. From lecture one to final test series, the roadmap is clear.</p>
            </div>
            <div class="c-card" style="text-align: left; border-top: 4px solid #FF003C;">
                <h3 style="color:#FF003C;">Personal Attention</h3>
                <p>Small batch monitoring to ensure no conceptual leak goes unnoticed.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 12: FUTURE IMPACT -->
    <div id="scene-12" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Preparing for Class 10 Boards</h2>
        <div class="c-grid">
            <div class="future-card" style="border-color: #FF003C; box-shadow: 0 10px 40px rgba(255,0,60,0.1);">
                <h3 style="color: #FF003C;">Exam Readiness</h3>
                <p>The pressure of boards is neutralized because the simulation environment has already been experienced in Class 9.</p>
            </div>
            <div class="future-card" style="border-color: #FFD700; box-shadow: 0 10px 40px rgba(255,215,0,0.1);">
                <h3 style="color: #FFD700;">Strong Base</h3>
                <p>Class 10 science and maths are direct derivatives of Class 9. We solidify the root to protect the tree.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 13: CLASSROOM EXPERIENCE (DELHI) -->
    <div id="scene-13" class="c-scene">
        <div class="bg-wrapper">
            <img src="/assets/img/premium_classroom.png" alt="Delhi Center Classroom">
        </div>
        <div class="content-overlay">
            <h2 class="c-title t-medium" style="margin-bottom:0;">A focused academic environment<br><span style="color: #FFD700;">in Delhi</span></h2>
            <p style="font-size: clamp(1rem, 3vw, 1.5rem); color: #fff; margin-top: 1rem;">Serious, disciplined, and optimized for high-performance learning.</p>
        </div>
    </div>

    <!-- SCENE 14: TRUST -->
    <div id="scene-14" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Trusted By Achievers</h2>
        <div class="c-grid">
            <div class="c-card testimonial-card" style="text-align: left; border-left: 4px solid #FFD700;">
                <div style="font-size: 3rem; color: #FFD700; margin-bottom: 0;">"</div>
                <p style="font-style: italic; font-size: 1.2rem; margin-bottom: 1.5rem;">"The focus on concept clarity changed everything. My daughter actually enjoys physics now."</p>
                <div style="font-weight: bold; color: var(--clr-primary);">— Ritu Sharma, Parent</div>
            </div>
            <div class="c-card testimonial-card" style="text-align: left; border-left: 4px solid #FF003C;">
                <div style="font-size: 3rem; color: #FF003C; margin-bottom: 0;">"</div>
                <p style="font-style: italic; font-size: 1.2rem; margin-bottom: 1.5rem;">"Samarpan Batch is intense. They track every mark you lose and force you to improve. The discipline is real."</p>
                <div style="font-weight: bold; color: var(--clr-primary);">— Aryan, Student</div>
            </div>
        </div>
    </div>

    <!-- SCENE 15: EMOTIONAL IMPACT & FINAL CTA -->
    <div id="scene-15" class="c-scene">
        <h2 class="c-title t-large" style="margin-bottom: 2rem; text-shadow: 0 10px 40px rgba(255,0,60,0.3);">Your child’s board result<br><span style="color: #FF003C;">starts here.</span></h2>
        <p class="c-subtitle" style="font-size: clamp(1.2rem, 3vw, 1.8rem); color: #FFD700; margin-bottom: 3rem; font-weight: bold;">Start the Journey to Board Success</p>
        <div class="hero-btns" style="position: relative; z-index: 10;">
            <a href="#join" class="c-btn c-btn-gold">Join Samarpan Batch</a>
            <a href="#visit" class="c-btn c-btn-outline" style="border-color: #00C9FF; color: #00C9FF;">Visit Center</a>
        </div>
    </div>

</main>

<script src="/assets/js/class9-scrolly.js"></script>

<?php include '../../includes/footer.php'; ?>
