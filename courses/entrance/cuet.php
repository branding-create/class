<?php 
$page_css = "/assets/css/cuet.css";
include '../../includes/header.php'; 
?>

<?php include '../../components/navbar.php'; ?>

<main class="exam-page">

    <!-- HERO -->
    <section class="exam-hero">
        <div class="container">
            <h1>CUET (Common University Entrance Test)</h1>
            <p>Get admission into top central universities with focused CUET preparation.</p>
        </div>
    </section>

    <!-- SUBJECTS -->
    <section class="subjects container">
        <h2>Subjects Covered</h2>

        <div class="subject-grid">
            <div class="subject-card">Language (English/Hindi)</div>
            <div class="subject-card">Domain Subjects</div>
            <div class="subject-card">General Test</div>
            <div class="subject-card">Current Affairs</div>
        </div>
    </section>

    <!-- DETAILS -->
    <section class="exam-details container">
        <div class="details-grid">

            <div class="left">
                <h2>What You Will Learn</h2>
                <ul>
                    <li>Complete CUET Syllabus Coverage</li>
                    <li>Domain Subject Mastery</li>
                    <li>Reading & Comprehension Skills</li>
                    <li>Mock Tests & Time Management</li>
                </ul>

                <h2>Course Highlights</h2>
                <ul>
                    <li>Daily Practice Questions</li>
                    <li>Weekly Mock Tests</li>
                    <li>CUET Pattern आधारित तैयारी</li>
                    <li>Expert Faculty Guidance</li>
                </ul>
            </div>

            <div class="right">
                <div class="card">
                    <h3>Course Info</h3>
                    <p><strong>Duration:</strong> 1 Year</p>
                    <p><strong>Mode:</strong> Offline</p>
                    <p><strong>Fees:</strong> ₹28,000</p>

                    <a href="#" class="btn btn-primary">Apply Now</a>
                </div>
            </div>

        </div>
    </section>

    <!-- FACULTY -->
    <section class="teacher-section">
        <div class="container">
            <h2>Expert Faculty</h2>

            <div class="teacher-card">
                <img src="/assets/img/teacher.jpg" alt="Teacher">
                <h3>CUET Experts</h3>
                <p>Experienced mentors helping students get top university admissions.</p>
            </div>
        </div>
    </section>

</main>

<?php include '../../includes/footer.php'; ?>
