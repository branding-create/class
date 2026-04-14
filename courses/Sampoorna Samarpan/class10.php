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

/* Timeline (Scene 8 - modified for Class 10) */
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
    box-shadow: 0 5px 20px rgba(255, 0, 60, 0.05);
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
    box-shadow: 0 0 20px #FF003C, 0 0 10px #FFD700;
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

/* Future Card */
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
    box-shadow: 0 15px 50px rgba(255,215,0,0.25);
}

/* High Speed Trail for 3D Elements */
.p-element {
    filter: drop-shadow(0px 0px 20px rgba(255, 215, 0, 0.5));
    transition: filter 0.2s ease, transform 0.1s ease-out;
}

/* Glowing Bee specific effects - Extreme for Class 10 */
#premium-bee {
    filter: drop-shadow(0px 0px 30px rgba(255, 0, 60, 0.8)) drop-shadow(0px 0px 10px rgba(255, 215, 0, 1)) brightness(1.3);
}

.c-btn-gold {
    background: linear-gradient(90deg, #FFD700, #FFAA00);
    color: #000;
    font-weight: 800;
    box-shadow: 0 10px 30px rgba(255, 215, 0, 0.4);
}
.c-btn-gold:hover {
    box-shadow: 0 15px 40px rgba(255, 215, 0, 0.7);
    transform: scale(1.05);
}

.c-btn-red {
    background: linear-gradient(90deg, #FF003C, #D00030);
    color: #fff;
    font-weight: 800;
    box-shadow: 0 10px 30px rgba(255, 0, 60, 0.4);
}
.c-btn-red:hover {
    box-shadow: 0 15px 40px rgba(255, 0, 60, 0.7);
    transform: scale(1.05);
}

/* Float Boxes for Scene 4 */
.float-box {
    position: absolute;
    padding: 1.5rem 2.5rem;
    background: rgba(0, 0, 0, 0.7);
    border: 2px solid;
    border-radius: 12px;
    font-size: 1.6rem;
    font-weight: bold;
    backdrop-filter: blur(10px);
    opacity: 0;
    z-index: 5;
    box-shadow: 0 10px 30px rgba(0,0,0,0.6);
    white-space: nowrap;
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

<!-- 3D Scroll Tracking Elements for Class 10 -->
<div class="premium-track-elements">
    <div id="premium-bee" class="p-element" style="width: 14rem; height: 14rem; top: 10%; right: 20%; transform: rotate(15deg); z-index: 55;">
        <img src="/assets/img/bee.png" alt="3D Bee" onerror="this.src='https://cdn3d.iconscout.com/3d/premium/thumb/bee-5206979-4352358.png';">
    </div>
</div>

<main class="premium-body scene-container">

    <!-- SCENE 1: HERO -->
    <div id="scene-1" class="c-scene">
        <img src="/assets/img/class5_hero.png" alt="Class 10 Student" class="bg-image" style="filter: brightness(0.5) contrast(1.3);">
        <h1 class="c-title t-hero" style="text-transform: uppercase; font-weight: 900; line-height: 1.1; margin-bottom: 0;">This Year Decides<br><span style="color: #FF003C; text-shadow: 0 0 40px rgba(255,0,60,0.4);">Everything</span></h1>
        <p class="c-subtitle" style="font-weight: 600; letter-spacing: 2px; font-size: clamp(1.2rem, 3vw, 1.6rem); margin-top: 1.5rem; color: #FFD700;">Class 10 Board Preparation – Sampoorna Samarpan Batch (Delhi)</p>
        <div class="hero-btns" style="position: relative; z-index: 10; margin-top: 3rem;">
            <a href="#join" class="c-btn c-btn-red">Join Sampoorna Samarpan Batch</a>
            <a href="#visit" class="c-btn c-btn-outline" style="border-color: #FFD700; color: #FFD700;">Book Free Demo</a>
        </div>
    </div>

    <!-- SCENE 2: REALITY CHECK -->
    <div id="scene-2" class="c-scene">
        <h2 class="c-title emotional-text t-medium" style="color: #FF003C; font-weight: 900; text-shadow: 0 10px 30px rgba(255,0,60,0.2);">Board results are not made in the last month…<br><br><span class="t-span" style="color: #FFD700;">They are built every single day.</span></h2>
    </div>

    <!-- SCENE 3: CORE MESSAGE -->
    <div id="scene-3" class="c-scene">
        <h2 class="c-title t-huge" style="line-height: 1.1; font-weight: 900; letter-spacing: -2px;">Discipline.<br>Strategy.<br><span style="color: #FFD700;">Results.</span></h2>
    </div>

    <!-- SCENE 4: CLASS 10 REALITY (FLOATERS) -->
    <div id="scene-4" class="c-scene" style="background: rgba(10,0,0,0.8);">
        <div class="float-box" style="top: 20%; left: 8%; border-color: #FF003C; color: #FF003C;">Heavy Syllabus</div>
        <div class="float-box" style="top: 70%; left: 15%; border-color: #00C9FF; color: #00C9FF;">Time Pressure</div>
        <div class="float-box" style="top: 25%; right: 10%; border-color: #FFD700; color: #FFD700;">High Expectations</div>
        <div class="float-box" style="top: 75%; right: 18%; border-color: #FF003C; color: #FF003C;">Past Year Papers</div>
        <h2 class="c-title" style="color: #fff;">The Reality of <span class="intense-text">Class 10</span></h2>
        <p class="c-subtitle" style="font-size: 1.6rem; max-width: 700px; margin: 2rem auto 0; color: #ccc;">Stress vs Preparation. It comes down to execution.</p>
    </div>

    <!-- SCENE 5: OUR SYSTEM -->
    <div id="scene-5" class="c-scene">
        <h2 class="c-title t-medium" style="color: #FFD700;">We don’t just prepare students…</h2>
        <h2 class="c-title intense-text t-large" style="font-weight: 900; text-transform: uppercase;">We prepare them to perform<br>under pressure.</h2>
    </div>

    <!-- SCENE 6: SUBJECT MASTER LEVEL -->
    <div id="scene-6" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Subject Master Level</h2>
        <div class="c-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
            <div class="subject-block" style="border-top: 5px solid #FFD700;">
                <h3 style="color: #FFD700;">Maths</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">Algebra Mastery<br>Geometry<br>High-level Problem Solving</p>
            </div>
            <div class="subject-block" style="border-top: 5px solid #00C9FF;">
                <h3 style="color: #00C9FF;">Science</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">Physics, Chemistry, Biology<br>Deep Concept Clarity<br>Application based logic</p>
            </div>
            <div class="subject-block" style="border-top: 5px solid #FF003C;">
                <h3 style="color: #FF003C;">English</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">Writing Skills<br>Grammar Mastery<br>Board-level Answers</p>
            </div>
        </div>
    </div>

    <!-- SCENE 7: BOARD STRATEGY SYSTEM -->
    <div id="scene-7" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Board Strategy System <span class="intense-text">★</span></h2>
        <div class="c-grid feature-grid">
            <div class="c-card feature-card" style="box-shadow: 0 0 20px rgba(255,215,0,0.1);"><div class="feat-icon" style="font-size: 3rem; color: #FFD700;">📑</div><h3>Chapter-wise Planning</h3></div>
            <div class="c-card feature-card" style="box-shadow: 0 0 20px rgba(0,201,255,0.1);"><div class="feat-icon" style="font-size: 3rem; color: #00C9FF;">🔄</div><h3>Concept → Practice</h3></div>
            <div class="c-card feature-card" style="box-shadow: 0 0 20px rgba(255,0,60,0.1);"><div class="feat-icon" style="font-size: 3rem; color: #FF003C;">📝</div><h3>Test → Revision</h3></div>
            <div class="c-card feature-card" style="box-shadow: 0 0 20px rgba(255,215,0,0.1);"><div class="feat-icon" style="font-size: 3rem; color: #FFD700;">🎯</div><h3>Exam-focused Prep</h3></div>
        </div>
    </div>

    <!-- SCENE 8: TEST SERIES SYSTEM -->
    <div id="scene-8" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Test Series System</h2>
        <div class="c-grid" style="gap: 3rem;">
            <div class="c-card" style="border: 2px solid rgba(255,215,0,0.3); background: rgba(0,0,0,0.5);">
                <h3 style="color: #FFD700; font-size: 2rem; margin-bottom: 1rem;">Weekly Tests</h3>
                <p style="font-size: 1.2rem;">Tracking immediate retention and chapter mastery constantly.</p>
            </div>
            <div class="c-card" style="border: 2px solid rgba(255,0,60,0.3); background: rgba(0,0,0,0.5);">
                <h3 style="color: #FF003C; font-size: 2rem; margin-bottom: 1rem;">Full Syllabus Tests</h3>
                <p style="font-size: 1.2rem;">Comprehensive exams simulating the actual board pressure.</p>
            </div>
            <div class="c-card" style="border: 2px solid rgba(0,201,255,0.3); background: rgba(0,0,0,0.5);">
                <h3 style="color: #00C9FF; font-size: 2rem; margin-bottom: 1rem;">Board Pattern Papers</h3>
                <p style="font-size: 1.2rem;">Exact replica of CBSE/Board papers to eliminate exam anxiety.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 9: PERFORMANCE ANALYSIS -->
    <div id="scene-9" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem; color: #FFD700;">We Analyze Every Student</h2>
        <div class="dashboard-grid">
            <div class="dash-card" style="border-color: rgba(255,0,60,0.4); box-shadow: 0 0 30px rgba(255,0,60,0.1);">
                <h3 style="margin-bottom: 1rem; color: #FF003C;">Weak Area Tracking</h3>
                <div style="width: 100%; height: 18px; background: rgba(255,255,255,0.1); border-radius: 10px; margin-bottom: 1.5rem;"><div style="width: 82%; height: 100%; background: linear-gradient(90deg, #FF003C, #FFD700); border-radius: 10px; box-shadow: 0 0 15px rgba(255,0,60,0.5);"></div></div>
                <div style="width: 100%; height: 18px; background: rgba(255,255,255,0.1); border-radius: 10px; margin-bottom: 1.5rem;"><div style="width: 95%; height: 100%; background: linear-gradient(90deg, #00C9FF, #FFD700); border-radius: 10px;"></div></div>
                <p style="margin-top: 2rem; color: var(--text-muted);">Dashboard-style tracking to generate immediate improvement plans.</p>
            </div>
            <div class="dash-card" style="border-color: rgba(255,215,0,0.3);">
                <h3 style="margin-bottom: 1rem; color: #FFD700;">Actionable Data</h3>
                <ul style="list-style:none; padding:0; margin:0; line-height: 2.2;">
                    <li>📄 Detailed Test Reports</li>
                    <li>🎯 Targeted Improvement</li>
                    <li>📈 Trajectory Analysis</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- SCENE 10: REVISION SYSTEM -->
    <div id="scene-10" class="c-scene">
        <h2 class="c-title t-medium">Revision is the Key to <span style="color: #FFD700; text-shadow: 0 0 20px rgba(255,215,0,0.5);">90%+ Scores</span></h2>
        <div class="split-container" style="margin-top: 4rem;">
            <div class="split-box good" style="border-top-color: #FF003C;">
                <h3 style="color: #FF003C; font-size: 2rem;">Multiple Cycles</h3>
                <p style="font-size: 1.2rem;">We execute multiple fast-paced revision cycles before the final exams hit.</p>
            </div>
            <div class="split-box good" style="border-top-color: #00C9FF;">
                <h3 style="color: #00C9FF; font-size: 2rem;">Smart Practice</h3>
                <p style="font-size: 1.2rem;">Focused repetition of maximum-weightage topics rather than blind reading.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 11: RESULTS -->
    <div id="scene-11" class="c-scene">
        <h2 class="c-title">Real Board-Level<br><span style="color: #FFD700;">Performance</span></h2>
        <div class="c-grid" style="margin-top: 4rem;">
            <div class="c-card">
                <div class="t-medium" style="color :#FFD700; font-weight:900;">95+</div>
                <p style="font-size: 1.2rem; font-weight: bold; margin-top: 1rem;">Higher marks potential.</p>
            </div>
            <div class="c-card">
                <div class="t-medium" style="color :#FF003C; font-weight:900;">MAX</div>
                <p style="font-size: 1.2rem; font-weight: bold; margin-top: 1rem;">Better accuracy.</p>
            </div>
            <div class="c-card">
                <div class="counter-val t-medium" data-target="100" style="color :#00C9FF; display:inline-block; font-weight:900;">0</div><span class="t-medium" style="color :#00C9FF; font-weight:bold;">%</span>
                <p style="font-size: 1.2rem; font-weight: bold; margin-top: 1rem;">Strong confidence.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 12: SAMPORNA SAMARPAN ADVANTAGE -->
    <div id="scene-12" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Why This Batch Works</h2>
        <div class="c-grid">
            <div class="c-card" style="text-align: left; background: rgba(255,215,0,0.05); border: 1px solid rgba(255,215,0,0.2);">
                <h3 style="color:#FFD700;">Dedicated Preparation</h3>
                <p>Fully optimized for the syllabus blueprint of the Class 10 Boards.</p>
            </div>
            <div class="c-card" style="text-align: left; background: rgba(255,0,60,0.05); border: 1px solid rgba(255,0,60,0.2);">
                <h3 style="color:#FF003C;">Strict Discipline</h3>
                <p>An unwavering daily routine that builds habit and kills procrastination.</p>
            </div>
            <div class="c-card" style="text-align: left; background: rgba(0,201,255,0.05); border: 1px solid rgba(0,201,255,0.2);">
                <h3 style="color:#00C9FF;">Personal Attention</h3>
                <p>No student left behind. Every doubt is permanently resolved.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 13: CLASSROOM EXPERIENCE (DELHI) -->
    <div id="scene-13" class="c-scene">
        <div class="bg-wrapper">
            <img src="/assets/img/premium_classroom.png" alt="Delhi Center Classroom for Board Prep">
        </div>
        <div class="content-overlay">
            <h2 class="c-title t-medium" style="margin-bottom:0;">A result-driven learning environment<br><span style="color: #FFD700;">in Delhi</span></h2>
            <p style="font-size: clamp(1rem, 3vw, 1.6rem); color: #fff; margin-top: 1rem; font-weight: 500;">Focused, serious, and surrounded by students preparing for top scores.</p>
        </div>
    </div>

    <!-- SCENE 14: TRUST -->
    <div id="scene-14" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Trusted By Top Scorers</h2>
        <div class="c-grid">
            <div class="c-card testimonial-card" style="text-align: left; border-left: 5px solid #FF003C; box-shadow: 0 10px 30px rgba(255,0,60,0.1);">
                <div style="font-size: 3rem; color: #FF003C; margin-bottom: 0;">"</div>
                <p style="font-style: italic; font-size: 1.2rem; margin-bottom: 1.5rem;">"The test series here was exactly what appeared in the Boards. It removed my fear entirely."</p>
                <div style="font-weight: bold; color: #FFD700;">— Rohan M., Delhi (96%)</div>
            </div>
            <div class="c-card testimonial-card" style="text-align: left; border-left: 5px solid #00C9FF; box-shadow: 0 10px 30px rgba(0,201,255,0.1);">
                <div style="font-size: 3rem; color: #00C9FF; margin-bottom: 0;">"</div>
                <p style="font-style: italic; font-size: 1.2rem; margin-bottom: 1.5rem;">"The discipline is strict but necessary. I learned how to manage my time and solve high-level Maths fast."</p>
                <div style="font-weight: bold; color: #FFD700;">— Sneha, Student</div>
            </div>
        </div>
    </div>

    <!-- SCENE 15: EMOTIONAL IMPACT & FINAL CTA -->
    <div id="scene-15" class="c-scene">
        <h2 class="c-title t-large" style="margin-bottom: 2rem; text-shadow: 0 10px 50px rgba(255,215,0,0.3); line-height: 1.2;">Your child’s future is decided<br><span class="intense-text">this year.</span></h2>
        <p class="c-subtitle" style="font-size: clamp(1.2rem, 3vw, 1.8rem); color: #fff; margin-bottom: 4rem; font-weight: bold;">Make the right choice.</p>
        <div class="hero-btns" style="position: relative; z-index: 10;">
            <a href="#join" class="c-btn c-btn-red" style="font-size: clamp(1rem, 2vw, 1.2rem); padding: 1.2rem 2rem;">Prepare for Board Success</a>
            <a href="#visit" class="c-btn c-btn-gold" style="font-size: clamp(1rem, 2vw, 1.2rem); padding: 1.2rem 2rem;">Visit Center</a>
        </div>
    </div>

</main>

<script src="/assets/js/class10-scrolly.js"></script>

<?php include '../../includes/footer.php'; ?>
