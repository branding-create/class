<?php 
$page_css = "../../assets/css/class1-premium.css";
include '../../includes/header.php'; 
?>

<!-- Custom CSS unique to Layouts (Theme compliance) -->
<style>
/* Split Screen (Scene 4 & 5 Logic) */
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

/* Timeline (Scene 8) */
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
.timeline-step:nth-child(odd)::after { right:  -11%; }
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
/* Future Card (Scene 11) */
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

<!-- 3D Scroll Tracking Elements -->
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
        <img src="/pandey/assets/img/class4_hero.png" alt="Class 6 Student" class="bg-image">
        <h1 class="c-title">Step Into <br><span class="c-highlight">Serious Learning</span></h1>
        <p class="c-subtitle">Class 6 (Super 8 Batch) – Aarsh Institute, Delhi</p>
        <div class="hero-btns" style="position: relative; z-index: 10;">
            <a href="#book" class="c-btn">Join Super 8 Batch</a>
            <a href="#visit" class="c-btn c-btn-outline">Book Free Demo</a>
        </div>
    </div>

    <!-- SCENE 2: REALIZATION -->
    <div id="scene-2" class="c-scene">
        <h2 class="c-title emotional-text">Class 6 is where learning stops being easy...<br>and starts becoming<br>real.</h2>
    </div>

    <!-- SCENE 3: CORE MESSAGE -->
    <div id="scene-3" class="c-scene">
        <h2 class="c-title">Concepts.<br>Logic.<br><span class="c-highlight">Performance.</span></h2>
    </div>

    <!-- SCENE 4: WHAT STUDENTS FACE (FLOATERS) -->
    <div id="scene-4" class="c-scene">
        <div class="float-box" style="top: 20%; left: 10%;">Confusion</div>
        <div class="float-box" style="top: 70%; left: 20%;">Pressure</div>
        <div class="float-box" style="top: 30%; right: 15%;">Formulae</div>
        <div class="float-box" style="top: 80%; right: 25%;">Doubt</div>
        <h2 class="c-title">Difficulty increases.<br>Weak basics get exposed.</h2>
    </div>

    <!-- SCENE 5: OUR SOLUTION (SPLIT SCREEN) -->
    <div id="scene-5" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">We simplify learning with strong concepts</h2>
        <div class="split-container">
            <div class="split-box bad" style="opacity: 0.5;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">❌</div>
                <h3>Standard Coaching</h3>
                <p>Skipping basics. Rushing syllabus. Leaving students confused.</p>
            </div>
            <div class="split-box good">
                <div style="font-size: 3rem; margin-bottom: 1rem;">✅</div>
                <h3>Super 8 Approach</h3>
                <p>Guiding visually. Ensuring absolute concept clarity before moving forward.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 6: SUBJECT DEPTH -->
    <div id="scene-6" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Class 6 Subject Depth</h2>
        <div class="c-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
            <div class="subject-block">
                <h3>Maths</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">Fractions & Decimals<br>Advanced Word Problems<br>Logical Thinking</p>
            </div>
            <div class="subject-block" style="border-color: #00C9FF;">
                <h3>Science</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">Physics Basics<br>Biology Concepts<br>Real-World Science</p>
            </div>
            <div class="subject-block">
                <h3>English</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">Grammar Structure<br>Writing Skills<br>Reading Comprehension</p>
            </div>
        </div>
    </div>

    <!-- SCENE 7: TEACHING SYSTEM -->
    <div id="scene-7" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">The Super 8 Teaching System</h2>
        <div class="c-grid">
            <div class="c-card">
                <h3>Concept Clarity First</h3>
                <p>Never memorize. Always understand the core 'why'.</p>
            </div>
            <div class="c-card">
                <h3>Step-by-Step Explanation</h3>
                <p>Breaking massive syllabus chapters into easy blocks.</p>
            </div>
            <div class="c-card">
                <h3>Practice + Revision</h3>
                <p>Continuous cycle to permanently lock in memory.</p>
            </div>
            <div class="c-card">
                <h3>Doubt Solving</h3>
                <p>Open floor to ask questions without embarrassment.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 8: DAILY SYSTEM -->
    <div id="scene-8" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">How Students Improve Daily</h2>
        <div class="timeline" style="width: 100%;">
            <div class="timeline-step">
                <h3 style="color: #ff416c;">1. Concept</h3>
                <p>Mastering the underlying theory.</p>
            </div>
            <div class="timeline-step">
                <h3 style="color: #ff416c;">2. Practice</h3>
                <p>Applying the theory mathematically or logically.</p>
            </div>
            <div class="timeline-step">
                <h3 style="color: #ff416c;">3. Application</h3>
                <p>Real-world integration and homework.</p>
            </div>
            <div class="timeline-step">
                <h3 style="color: #ff416c;">4. Test</h3>
                <p>Executing flawlessly under time pressure.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 9: PERFORMANCE TRACKING -->
    <div id="scene-9" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Performance Dashboard</h2>
        <div class="dashboard-grid">
            <div class="dash-card">
                <h3 style="margin-bottom: 1rem; color: #ff416c;">Macro Progress Tracking</h3>
                <div style="width: 100%; height: 15px; background: rgba(255,255,255,0.1); border-radius: 10px; margin-bottom: 1rem;"><div style="width: 90%; height: 100%; background: #00C9FF; border-radius: 10px;"></div></div>
                <div style="width: 100%; height: 15px; background: rgba(255,255,255,0.1); border-radius: 10px; margin-bottom: 1rem;"><div style="width: 75%; height: 100%; background: #ff416c; border-radius: 10px;"></div></div>
                <p style="margin-top: 2rem; color: var(--text-muted);">In-depth test analysis sent directly to parents ensuring 100% transparency.</p>
            </div>
            <div class="dash-card">
                <h3 style="margin-bottom: 1rem; color: #00C9FF;">Weekly Logs</h3>
                <ul style="list-style:none; padding:0; margin:0; line-height: 2;">
                    <li>📉 Test Analysis</li>
                    <li>🛡 Weakness Checks</li>
                    <li>📩 Parent Updates</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- SCENE 10: RESULTS -->
    <div id="scene-10" class="c-scene">
        <h2 class="c-title">Real Academic<br>Improvement</h2>
        <div class="c-grid" style="margin-top: 3rem;">
            <div class="c-card">
                <div class="counter-val" data-target="2" style="font-size: 3rem; color :#00C9FF; display:inline-block; font-weight:bold;">0</div><span style="font-size: 3rem; color :#00C9FF; font-weight:bold;">X</span>
                <p>Faster understanding pace.</p>
            </div>
            <div class="c-card">
                <div class="counter-val" data-target="90" style="font-size: 3rem; color :#ff416c; display:inline-block; font-weight:bold;">0</div><span style="font-size: 3rem; color :#ff416c; font-weight:bold;">%</span>
                <p>Better problem solving independence.</p>
            </div>
            <div class="c-card">
                <div class="counter-val" data-target="100" style="font-size: 3rem; color :#00C9FF; display:inline-block; font-weight:bold;">0</div><span style="font-size: 3rem; color :#00C9FF; font-weight:bold;">%</span>
                <p>Boost in academic confidence.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 11: SUPER 8 ADVANTAGE -->
    <div id="scene-11" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Why Super 8 Batch?</h2>
        <div class="c-grid">
            <div class="future-card">
                <h3>The Final Advantage</h3>
                <p>Building a robust base for Class 7-8, preparing early for Class 9-10 pressures, and developing a lasting competitive mindset.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 12: CLASSROOM EXPERIENCE (DELHI) -->
    <div id="scene-12" class="c-scene">
        <div class="bg-wrapper">
            <img src="/pandey/assets/img/premium_classroom.png" alt="Delhi Center Classroom">
        </div>
        <div class="content-overlay">
            <h2 class="c-title" style="margin-bottom:0;">A disciplined learning environment<br>in Delhi</h2>
        </div>
    </div>

    <!-- SCENE 13: TRUST -->
    <div id="scene-13" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Trusted by Parents in Delhi</h2>
        <div class="c-grid">
            <div class="c-card testimonial-card" style="text-align: left;">
                <div style="font-size: 2rem; color: #ff416c; margin-bottom: 1rem;">"</div>
                <p style="font-style: italic; font-size: 1.2rem; margin-bottom: 1.5rem;">"Science used to scare him. The practical real-world breakdowns completely changed his attitude. Super 8 is genuinely transformative."</p>
                <div style="font-weight: bold; color: var(--clr-primary);">— Neha Verma, Delhi</div>
            </div>
            <div class="c-card testimonial-card" style="text-align: left;">
                <div style="font-size: 2rem; color: #ff416c; margin-bottom: 1rem;">"</div>
                <p style="font-style: italic; font-size: 1.2rem; margin-bottom: 1.5rem;">"The focus on concepts rather than just syllabus completion makes Aarsh Institute stand out from regular coaching."</p>
                <div style="font-weight: bold; color: var(--clr-primary);">— Sanjay Gupta, Delhi</div>
            </div>
        </div>
    </div>

    <!-- SCENE 14: EMOTIONAL MOMENT -->
    <div id="scene-14" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 3rem;">Strong concepts today<br>build future success.</h2>
        <p class="c-subtitle">Start Strong in Class 6</p>
        <div class="hero-btns" style="position: relative; z-index: 10;">
            <a href="#book" class="c-btn">Join Super 8 Batch</a>
            <a href="#visit" class="c-btn c-btn-outline">Visit Center</a>
        </div>
    </div>

</main>

<script src="/pandey/assets/js/class6-scrolly.js"></script>

<?php include '../../includes/footer.php'; ?>