<?php 
$page_css = "/pandey/assets/css/ba.css";
include '../../includes/header.php'; 
?>

<?php include '../../components/navbar.php'; ?>

<main class="class-page">

    <!-- HERO -->
    <section class="class-hero">
        <div class="container">
            <h1>BA (Bachelor of Arts)</h1>
            <p>Develop strong conceptual understanding in Humanities & Social Sciences.</p>
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
                    <li>Conceptual History & Timeline</li>
                    <li>Political Theories & Case Studies</li>
                    <li>Social Structures & Society Analysis</li>
                    <li>Geographical Concepts & Maps</li>
                </ul>

                <h2>Course Highlights</h2>
                <ul>
                    <li>Strong Concept Building</li>
                    <li>Answer Writing Practice</li>
                    <li>Case Studies & Discussions</li>
                    <li>Career Guidance</li>
                </ul>
            </div>

            <div class="right">
                <div class="card">
                    <h3>Course Info</h3>
                    <p><strong>Duration:</strong> 3 Years</p>
                    <p><strong>Mode:</strong> Offline</p>
                    <p><strong>Fees:</strong> ₹55,000</p>

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
                <h3>Arts Faculty</h3>
                <p>Expert teachers in Humanities & Social Sciences.</p>
            </div>
        </div>
    </section>

</main>

<?php include '../../includes/footer.php'; ?>