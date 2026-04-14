<?php 
$page_css = "/assets/css/bcom.css";
include '../../includes/header.php'; 
?>

<?php include '../../components/navbar.php'; ?>

<main class="class-page">

    <!-- HERO -->
    <section class="class-hero">
        <div class="container">
            <h1>B.Com (Bachelor of Commerce)</h1>
            <p>Build strong foundation in Accounting, Finance & Business.</p>
        </div>
    </section>

    <!-- SUBJECTS -->
    <section class="subjects container">
        <h2>Subjects Covered</h2>

        <div class="subject-grid">
            <div class="subject-card">Accounting</div>
            <div class="subject-card">Business Law</div>
            <div class="subject-card">Economics</div>
            <div class="subject-card">Finance</div>
        </div>
    </section>

    <!-- DETAILS -->
    <section class="class-details container">
        <div class="details-grid">

            <div class="left">
                <h2>What You Will Learn</h2>
                <ul>
                    <li>Financial Accounting</li>
                    <li>Business Laws</li>
                    <li>Taxation Basics</li>
                    <li>Corporate Finance</li>
                </ul>

                <h2>Course Highlights</h2>
                <ul>
                    <li>Industry-oriented learning</li>
                    <li>Case Studies</li>
                    <li>Internship Guidance</li>
                    <li>Career Support</li>
                </ul>
            </div>

            <div class="right">
                <div class="card">
                    <h3>Course Info</h3>
                    <p><strong>Duration:</strong> 3 Years</p>
                    <p><strong>Mode:</strong> Offline</p>
                    <p><strong>Fees:</strong> ₹60,000</p>

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
                <img src="/assets/img/teacher.jpg" alt="Teacher">
                <h3>Commerce Faculty</h3>
                <p>Experienced teachers for Accounts, Business & Economics.</p>
            </div>
        </div>
    </section>

</main>

<?php include '../../includes/footer.php'; ?>
