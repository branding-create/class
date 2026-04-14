<?php 
$page_css = "/pandey/assets/css/bba.css";
include '../../includes/header.php'; 
?>

<?php include '../../components/navbar.php'; ?>

<main class="class-page">

    <!-- HERO -->
    <section class="class-hero">
        <div class="container">
            <h1>BBA (Bachelor of Business Administration)</h1>
            <p>Build leadership, management & business skills for real-world success.</p>
        </div>
    </section>

    <!-- SUBJECTS -->
    <section class="subjects container">
        <h2>Subjects Covered</h2>

        <div class="subject-grid">
            <div class="subject-card">Management</div>
            <div class="subject-card">Marketing</div>
            <div class="subject-card">Finance</div>
            <div class="subject-card">Human Resource</div>
        </div>
    </section>

    <!-- DETAILS -->
    <section class="class-details container">
        <div class="details-grid">

            <div class="left">
                <h2>What You Will Learn</h2>
                <ul>
                    <li>Business Management Fundamentals</li>
                    <li>Marketing Strategies</li>
                    <li>Financial Planning & Analysis</li>
                    <li>Leadership & Communication Skills</li>
                </ul>

                <h2>Course Highlights</h2>
                <ul>
                    <li>Case Studies & Real Projects</li>
                    <li>Internship Support</li>
                    <li>Personality Development</li>
                    <li>Placement Guidance</li>
                </ul>
            </div>

            <div class="right">
                <div class="card">
                    <h3>Course Info</h3>
                    <p><strong>Duration:</strong> 3 Years</p>
                    <p><strong>Mode:</strong> Offline</p>
                    <p><strong>Fees:</strong> ₹65,000</p>

                    <a href="#" class="btn btn-primary">Apply Now</a>
                </div>
            </div>

        </div>
    </section>

    <!-- TEACHER -->
    <section class="teacher-section">
        <div class="container">
            <h2>Meet Your Faculty</h2>

            <div class="teacher-card">
                <img src="/pandey/assets/img/teacher.jpg" alt="Teacher">
                <h3>Management Faculty</h3>
                <p>Experienced mentors for business, management & leadership training.</p>
            </div>
        </div>
    </section>

</main>

<?php include '../../includes/footer.php'; ?>