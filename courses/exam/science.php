<?php 
$page_css = "/assets/css/science.css";
include '../../includes/header.php'; 
?>

<?php include '../../components/navbar.php'; ?>

<main class="class-page">

    <!-- Hero -->
    <section class="class-hero">
        <div class="container">
            <h1>Class 11 - Science</h1>
            <p>Strong foundation in Physics, Chemistry, and Maths/Biology for future success.</p>
        </div>
    </section>

    <!-- Subjects -->
    <section class="subjects container">
        <h2>Subjects Covered</h2>

        <div class="subject-grid">
            <div class="subject-card">Physics</div>
            <div class="subject-card">Chemistry</div>
            <div class="subject-card">Mathematics</div>
            <div class="subject-card">Biology</div>
        </div>
    </section>

    <!-- Details -->
    <section class="class-details container">
        <div class="details-grid">
            
            <div class="left">
                <h2>What You Will Learn</h2>
                <ul>
                    <li>Conceptual Physics (Numericals + Theory)</li>
                    <li>Chemistry (Organic + Inorganic + Physical)</li>
                    <li>Mathematics (Algebra, Trigonometry, Calculus Basics)</li>
                    <li>Biology (NCERT Focus + Diagrams)</li>
                </ul>

                <h2>Course Highlights</h2>
                <ul>
                    <li>Foundation for NEET / JEE</li>
                    <li>Weekly Tests</li>
                    <li>Doubt Sessions</li>
                    <li>NCERT + Advanced Practice</li>
                </ul>
            </div>

            <div class="right">
                <div class="card">
                    <h3>Course Info</h3>
                    <p><strong>Duration:</strong> 1 Year</p>
                    <p><strong>Mode:</strong> Offline</p>
                    <p><strong>Fees:</strong> ₹45,000</p>

                    <a href="#" class="btn btn-primary">Apply Now</a>
                </div>
            </div>

        </div>
    </section>

    <!-- Teacher -->
    <section class="teacher-section">
        <div class="container">
            <h2>Meet Your Faculty</h2>

            <div class="teacher-card">
                <img src="/assets/img/teacher.jpg" alt="Teacher">
                <h3>Expert Faculty Team</h3>
                <p>Specialized teachers for Physics, Chemistry, Maths & Biology.</p>
            </div>
        </div>
    </section>

</main>

<?php include '../../includes/footer.php'; ?>
