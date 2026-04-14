 <?php 
$page_css = "../../assets/css/class1-premium.css";
include '../../includes/header.php'; 
?>
<?php include '../../components/navbar.php'; ?>

<!-- 3D Scroll Tracking Elements (Fanta Style) -->
<div class="premium-track-elements">
    <div id="premium-book" class="p-element" style="width: 15rem; height: 15rem; top: 10%; right: 25%; transform: rotate(15deg); z-index: 52;">
        <img src="/pandey/assets/img/book.png" alt="3D Book" onerror="this.src='https://cdn3d.iconscout.com/3d/premium/thumb/book-4993683-4163486.png';">
    </div>
    <div id="premium-pen" class="p-element" style="width: 12rem; height: 12rem; top: 15%; right: 5%; transform: rotate(0deg); z-index: 53;">
        <img src="/pandey/assets/img/pen.png" alt="3D Pen" onerror="this.src='https://cdn3d.iconscout.com/3d/premium/thumb/pen-5182414-4325492.png';">
    </div>
    <div id="premium-cap" class="p-element" style="width: 18rem; height: 18rem; top: 60%; right: -5%; transform: rotate(-15deg); z-index: 51;">
        <img src="/pandey/assets/img/cap.png" alt="3D Cap" onerror="this.src='https://cdn3d.iconscout.com/3d/premium/thumb/graduation-cap-5301826-4444583.png';">
    </div>
</div>

<main class="premium-body scene-container">

    <!-- SCENE 1: HERO -->
    <div id="scene-1" class="c-scene">
        <img src="/pandey/assets/img/classroom_hero.png" alt="Child Learning" class="bg-image">
        <h1 class="c-title">Give Your Child the <br><span class="c-highlight">Strongest Start</span></h1>
        <p class="c-subtitle">Class 1 Foundation Program in Delhi by Aarsh Institute</p>
        <div class="hero-btns" style="position: relative; z-index: 10;">
            <a href="#book" class="c-btn">Book Free Demo</a>
            <a href="#visit" class="c-btn c-btn-outline">Visit Center</a>
        </div>
    </div>

    <!-- SCENE 2: PROBLEM -->
    <div id="scene-2" class="c-scene">
        <h2 class="c-title emotional-text">Most students struggle later...<br>because their foundation<br>was never strong.</h2>
    </div>

    <!-- SCENE 3: SOLUTION -->
    <div id="scene-3" class="c-scene">
        <h2 class="c-title">We build strong foundations<br>from <span class="c-highlight">Day One.</span></h2>
        <div class="teacher-img-wrap" style="width: 100%; max-width: 800px; margin-top: 3rem; border-radius: 20px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.5);">
            <img src="/pandey/assets/img/teacher_learning.png" alt="Teacher guiding child" style="width: 100%; height: auto; display: block; object-fit: cover;">
        </div>
    </div>

    <!-- SCENE 4: LEARNING EXPERIENCE (3D FLOATERS) -->
    <div id="scene-4" class="c-scene">
        
        <!-- Floating Math/English fragments directly over viewport -->
        <div class="float-box" style="top: 20%; left: 10%;">A B C</div>
        <div class="float-box" style="top: 70%; left: 20%;">1 + 2 = 3</div>
        <div class="float-box" style="top: 30%; right: 15%;">🍎</div>
        <div class="float-box" style="top: 80%; right: 25%;">X</div>

        <h2 class="c-title">Reading. Writing.<br>Thinking. Confidence.</h2>
    </div>

    <!-- SCENE 5: TEACHING METHOD -->
    <div id="scene-5" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">The Aarsh Method</h2>
        <div class="c-grid">
            <div class="c-card">
                <h3>Concept-Based Learning</h3>
                <p>No rote memorization. Understanding over everything.</p>
            </div>
            <div class="c-card">
                <h3>Small Batch Size</h3>
                <p>Only 15 students per batch for absolute focus.</p>
            </div>
            <div class="c-card">
                <h3>Personal Attention</h3>
                <p>Teachers who actually know your child's strengths.</p>
            </div>
            <div class="c-card">
                <h3>Activity-Based</h3>
                <p>Learning through games, blocks, and practical play.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 6: SUBJECTS -->
    <div id="scene-6" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">What They Learn</h2>
        <div class="c-grid">
            <div class="subject-block">
                <h3>Maths</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">Numbers Mapping<br>Addition Mastery<br>Subtraction Logic</p>
            </div>
            <div class="subject-block">
                <h3>English</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">Advanced Phonics<br>Fluent Reading<br>Creative Writing</p>
            </div>
            <div class="subject-block">
                <h3>EVS</h3>
                <p style="font-size: 1.2rem; line-height: 1.8;">World Awareness<br>Nature Basics<br>Personal Hygiene</p>
            </div>
        </div>
    </div>

    <!-- SCENE 7: CLASSROOM EXPERIENCE (DELHI ZOOM) -->
    <div id="scene-7" class="c-scene">
        <div class="bg-wrapper">
            <img src="/pandey/assets/img/premium_classroom.png" alt="Delhi Center">
        </div>
        <div class="content-overlay">
            <h2 class="c-title" style="margin-bottom:0;">A focused, safe, and disciplined<br>learning space in Delhi</h2>
        </div>
    </div>

    <!-- SCENE 8: TRUST & RESULTS -->
    <div id="scene-8" class="c-scene">
        <h2 class="c-title">Trusted by 1000+ Parents<br>in Delhi</h2>
        <div class="c-grid" style="margin-top: 3rem;">
            <div class="c-card">
                <div class="counter-val" data-target="90">0</div>
                <h3 style="color: #ff416c;">%</h3>
                <p>Improvement in basic understanding within 3 months.</p>
            </div>
            <div class="c-card">
                <div class="counter-val" data-target="100">0</div>
                <h3 style="color: #ff416c;">%</h3>
                <p>Strong reading & writing growth.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 9: FEATURES -->
    <div id="scene-9" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 4rem;">Beyond The Classroom</h2>
        <div class="c-grid feature-grid">
            <div class="c-card feature-card">
                <div class="feat-icon" style="font-size: 3rem; margin-bottom: 1rem; color: #ff416c;">📝</div>
                <h3 style="font-size:1.5rem;">Daily Worksheets</h3>
                <p>Tracking progress locally every single day.</p>
            </div>
            <div class="c-card feature-card">
                <div class="feat-icon" style="font-size: 3rem; margin-bottom: 1rem; color: #ff416c;">📊</div>
                <h3 style="font-size:1.5rem;">Weekly Tests</h3>
                <p>Ensuring retention of core concepts.</p>
            </div>
            <div class="c-card feature-card">
                <div class="feat-icon" style="font-size: 3rem; margin-bottom: 1rem; color: #ff416c;">❓</div>
                <h3 style="font-size:1.5rem;">Doubt Solving</h3>
                <p>One-on-one sessions for struggling students.</p>
            </div>
            <div class="c-card feature-card">
                <div class="feat-icon" style="font-size: 3rem; margin-bottom: 1rem; color: #ff416c;">👨‍👩‍👧</div>
                <h3 style="font-size:1.5rem;">Parent Feedback</h3>
                <p>Weekly updates directly to your WhatsApp.</p>
            </div>
        </div>
    </div>

    <!-- SCENE 10: LOCATION -->
    <div id="scene-10" class="c-scene">
        <h2 class="c-title">Visit Our Delhi Center</h2>
        <div style="max-width: 600px; text-align: center; margin: 0 auto 3rem auto;">
            <p style="font-size: 1.4rem; color: #ccc;">Aarsh Institute, 123 Education Hub, Knowledge Park, Delhi</p>
            <p style="font-size: 1.1rem; color: #888;">(Near Metro Pillar 45)</p>
        </div>
        <div style="width: 100%; max-width: 800px; height: 400px; border-radius: 20px; overflow: hidden; border: 1px solid rgba(255,255,255,0.1);">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224346.61368633393!2d77.04417124316027!3d28.527582006126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!-- SCENE 11: EMOTIONAL CLOSE -->
    <div id="scene-11" class="c-scene">
        <h2 class="c-title" style="margin-bottom: 3rem;">Confidence begins with<br>the right foundation.</h2>
        <p class="c-subtitle">Start Your Child’s Journey Today</p>
        <div class="hero-btns" style="position: relative; z-index: 10;">
            <a href="#book" class="c-btn">Book Free Demo</a>
            <a href="#call" class="c-btn c-btn-outline">Call Now</a>
        </div>
    </div>

</main>

<!-- Scrolly JS included specific to Class 1 ONLY before Footer -->
<script src="/pandey/assets/js/class1-scrolly.js"></script>

<?php include '../../includes/footer.php'; ?>