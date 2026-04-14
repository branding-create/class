<?php 
$page_css = "/pandey/assets/css/ma.css";
include '../../includes/header.php'; 
?>

<?php include '../../components/navbar.php'; ?>

<main class="class-page">

    <!-- HERO -->
    <section class="class-hero">
        <div class="container">
            <h1>MA (Master of Arts)</h1>
            <p>Deep understanding of humanities, social sciences & analytical thinking.</p>
        </div>
    </section>

    <!-- SUBJECTS -->
    <section class="subjects container">
        <h2>Subjects Covered</h2>

        <div class="subject-grid">
            <div class="subject-card">History</div>
            <div class="subject-card">Political Science</div>
            <div class="subject-card">Sociology</div>
            <div class="subject-card">Geography</div>
        </div>
    </section>

    <!-- DETAILS -->
    <section class="class-details container">
        <div class="details-grid">

            <div class="left">
                <h2>What You Will Learn</h2>
                <ul>
                    <li>Advanced Conceptual Understanding</li>
                    <li>Research & Writing Skills</li>
                    <li>Critical Thinking & Analysis</li>
                    <li>Social & Political Awareness</li>
                </ul>

                <h2>Course Highlights</h2>
                <ul>
                    <li>Research-Based Learning</li>
                    <li>Expert Faculty Guidance</li>
                    <li>Essay & Case Study Practice</li>
                    <li>Competitive Exam Preparation</li>
                </ul>
            </div>

            <div class="right">
                <div class="card">
                    <h3>Course Info</h3>
                    <p><strong>Duration:</strong> 2 Years</p>
                    <p><strong>Mode:</strong> Offline</p>
                    <p><strong>Fees:</strong> ₹60,000</p>

                    <a href="#" class="btn btn-primary">Apply Now</a>
                </div>
            </div>

        </div>
    </section>

    <!-- FACULTY -->
    <section class="teacher-section">
        <div class="container">
            <h2>Meet Your Faculty</h2>

            <div class="teacher-card">
                <img src="/pandey/assets/img/teacher.jpg" alt="Teacher">
                <h3>Arts Faculty</h3>
                <p>Experienced professors with strong academic and research background.</p>
            </div>
        </div>
    </section>

</main>

<?php include '../../includes/footer.php'; ?>