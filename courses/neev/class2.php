<?php 
$page_css = "../../assets/css/class1-premium.css";
include '../../includes/header.php'; 
?>
<?php include '../../components/navbar.php'; ?>

<!-- 3D Scroll Tracking Elements (Fanta Style) -->
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
        <img src="/assets/img/class2_hero.png" alt="Child writing confidently" class="bg-image">
        <h1 class="c-title">Now It’s Time to <br><span class="c-highlight">Grow Stronger</span></h1>
        <p class="c-subtitle">Class 2 Advanced Learning Program – Aarsh Institute, Delhi</p>
        <div class="hero-btns" style="position: relative; z-index: 10;">
            <a href="#book" class="c-btn">Book Free Demo</a>
            <a href="#visit" class="c-btn c-btn-outline">Visit Center</a>
        </div>
    </div>

    <!-- SCENE 2: TRANSITION (FROM CLASS 1) -->
    <div id="scene-2" class="c-scene">
        <h2 class="c-title emotional-text">Your child has started learning...<br>Now it’s time to<br>strengthen and expand.</h2>
    </div>

    <!-- SCENE 3: CORE FOCUS -->
    <div id="scene-3" class="c-scene">
        <h2 class="c-title">Stronger Basics.<br>Faster Understanding.<br><span class="c-highlight">More Confidence.</span></h2>
    </div>

    <!-- SCENE 4: WHAT CHANGES IN CLASS 2 (3D FLOATERS) -->
    <div id="scene-4" class="c-scene">
        
        <!-- Floating Math/English fragments directly over viewport -->
        <div class="float-box" style="top: 20%; left: 10%;">"Sentence"</div>
        <div class="float-box" style="top: 70%; left: 20%;">24 × 5</div>
        <div class="float-box" style="top: 30%; right: 15%;">Reading</div>
        <div class="float-box" style="top: 80%; right: 25%;">Understanding</div>

        <h2 class="c-title">Independent thinking.<br>Better understanding.</h2>
    </div>

    <!-- SCENE 5: TEACHING APPROACH -->
    <div id="scene-5" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Upgraded Teaching Approach</h2>
        <div class="c-grid">
            <div class="c-card">
                <h3>Concept Mastery</h3>
                <p>Moving from basic recognition to deep application.</p>
            </div>
            <div class="c-card">
                <h3>Practice + Revision</h3>
                <p>Continuous learning cycles for flawless memory.</p>
            </div>
            <div class="c-card">
                <h3>Personal Attention</h3>
                <p>Small batches dedicated to your child's pace.</p>
            </div>
            <div class="c-card">
                <h3>Confidence Building</h3>
                <p>Public speaking and active participation in class.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 6: SUBJECTS EXPERIENCE -->
    <div id="scene-6" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Class 2 Curriculum</h2>
        <div class="c-grid">
            <div class="subject-block">
                <h3>Maths</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">Addition & Subtraction<br>Introduction to Multiplication<br>Word Problems</p>
            </div>
            <div class="subject-block">
                <h3>English</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">Active Reading<br>Foundational Grammar<br>Sentence Building</p>
            </div>
            <div class="subject-block">
                <h3>EVS</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">Real-World Understanding<br>Science Basics<br>Good Habits</p>
            </div>
        </div>
    </div>

    <!-- SCENE 7: CLASSROOM EXPERIENCE (DELHI ZOOM) -->
    <div id="scene-7" class="c-scene">
        <div class="bg-wrapper">
            <img src="/assets/img/premium_classroom.png" alt="Delhi Center Classroom">
        </div>
        <div class="content-overlay">
            <h2 class="c-title" style="margin-bottom:0;">A focused learning environment<br>designed for growing minds in Delhi</h2>
        </div>
    </div>

    <!-- SCENE 8: PROGRESS & RESULTS -->
    <div id="scene-8" class="c-scene">
        <h2 class="c-title">Real Improvement<br>You Can See</h2>
        <div class="c-grid" style="margin-top: 3rem;">
            <div class="c-card">
                <div style="display:flex; justify-content:center; align-items:baseline;">
                    <div class="counter-val" data-target="95">0</div>
                    <h3 style="color: #ff416c; margin:0; font-size:3rem;">%</h3>
                </div>
                <p>Faster & more accurate problem solving.</p>
            </div>
            <div class="c-card">
                <div style="display:flex; justify-content:center; align-items:baseline;">
                    <div class="counter-val" data-target="200">0</div>
                    <h3 style="color: #ff416c; margin:0; font-size:3rem;">%</h3>
                </div>
                <p>Better reading speed and vocabulary retention.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 9: FEATURES -->
    <div id="scene-9" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Premium Features</h2>
        <div class="c-grid feature-grid">
            <div class="c-card feature-card">
                <div class="feat-icon" style="font-size: 3rem; margin-bottom: 1rem; color: #ff416c;">📝</div>
                <h3 style="font-size:1.5rem;">Daily Worksheets</h3>
                <p>Consistent practice every day.</p>
            </div>
            <div class="c-card feature-card">
                <div class="feat-icon" style="font-size: 3rem; margin-bottom: 1rem; color: #ff416c;">📊</div>
                <h3 style="font-size:1.5rem;">Weekly Tests</h3>
                <p>Ensuring retention of core concepts.</p>
            </div>
            <div class="c-card feature-card">
                <div class="feat-icon" style="font-size: 3rem; margin-bottom: 1rem; color: #ff416c;">❓</div>
                <h3 style="font-size:1.5rem;">Doubt Sessions</h3>
                <p>Clearing blocks before they build up.</p>
            </div>
            <div class="c-card feature-card">
                <div class="feat-icon" style="font-size: 3rem; margin-bottom: 1rem; color: #ff416c;">👨‍👩‍👧</div>
                <h3 style="font-size:1.5rem;">Parent Updates</h3>
                <p>Direct reports on child's progress.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 10: LOCAL TRUST -->
    <div id="scene-10" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Trusted by Parents Across Delhi</h2>
        <div class="c-grid">
            <div class="c-card testimonial-card" style="text-align: left;">
                <div style="font-size: 2rem; color: #ff416c; margin-bottom: 1rem;">"</div>
                <p style="font-style: italic; font-size: 1.2rem; margin-bottom: 1.5rem;">"The change in my daughter's confidence in Math is incredible. She solves problems independently now."</p>
                <div style="font-weight: bold; color: var(--clr-primary);">— Priya Sharma, Delhi</div>
            </div>
            <div class="c-card testimonial-card" style="text-align: left;">
                <div style="font-size: 2rem; color: #ff416c; margin-bottom: 1rem;">"</div>
                <p style="font-style: italic; font-size: 1.2rem; margin-bottom: 1.5rem;">"Aarsh Institute’s approach is totally different. The personal attention has made my son love reading."</p>
                <div style="font-weight: bold; color: var(--clr-primary);">— Rahul Verma, Delhi</div>
            </div>
        </div>
    </div>

    <!-- SCENE 11: EMOTIONAL CLOSE -->
    <div id="scene-11" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 3rem;">Confidence grows when<br>the foundation is strong.</h2>
        <p class="c-subtitle">Help Your Child Move Ahead with Confidence</p>
        <div class="hero-btns" style="position: relative; z-index: 10;">
            <a href="#book" class="c-btn">Book Free Demo</a>
            <a href="#visit" class="c-btn c-btn-outline">Visit Center</a>
        </div>
    </div>

</main>

<!-- Custom Scrolly JS for Class 2 -->
<script src="/assets/js/class2-scrolly.js"></script>

<?php include '../../includes/footer.php'; ?>
