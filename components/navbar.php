<?php
// components/navbar.php
?>
<!-- Master Header Container -->
<header class="master-header">
    <!-- Top Header / Breaking News Bar -->
    <div class="top-header-wrapper" id="topHeader">
    <div class="top-contact-bar container">
        <div class="contact-info">
            <span>Contact Us: 📞 +91 8750391152</span>
            <span class="divider">|</span>
            <span>✉️ support@aarshinstitute.com</span>
        </div>
        <div class="demo-btn-wrap">
            <a href="#demo" class="demo-link">🎓 Request a Demo Class</a>
        </div>
    </div>
    
    <div class="marquee-wrapper">
        <div class="marquee-content">
            <span class="marquee-item">Welcome to Aarsh Institute — Aapka Lakshya, Hamari Margdarshan. Find out more!</span>
            <span class="marquee-item">★ TOP DEMANDED: NEW E-BOOKS + CHEAT SHEETS + PYQ SERIES COMBO — DOWNLOAD FREE</span>
            <span class="marquee-item">★ TOP SEARCHED: 10th & 12th Board New Batches Started — JOIN NOW</span>
            <span class="marquee-item">★ TRENDING: BLOGS - TOPPER’S FORMULAE FRAMEWORK REVEALED — CHECK OUT</span>
            <!-- Duplicate for seamless looping -->
            <span class="marquee-item">Welcome to Aarsh Institute — Aapka Lakshya, Hamari Margdarshan. Find out more!</span>
            <span class="marquee-item">★ TOP DEMANDED: NEW E-BOOKS + CHEAT SHEETS + PYQ SERIES COMBO — DOWNLOAD FREE</span>
            <span class="marquee-item">★ TOP SEARCHED: 10th & 12th Board New Batches Started — JOIN NOW</span>
            <span class="marquee-item">★ TRENDING: BLOGS - TOPPER’S FORMULAE FRAMEWORK REVEALED — CHECK OUT</span>
        </div>
    </div>
</div>

<nav class="navbar" id="navbar">
    <div class="navbar-container container">
        <div class="nav-logo">
            <a href="/index.php" class="logo-img">
    <img src="/assets/img/logo.png" alt="Aarsh Institute Logo">
</a>
        </div>
        
        <div class="nav-menu" id="navMenu">
            <ul class="nav-list">
                <li class="nav-item"><a href="/index.php" class="nav-link">Home</a></li>
                <li class="nav-item dropdown">
                    <a href="#courses" class="nav-link">Courses <span class="caret-down"></span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item dropdown">
                            <a href="#">Neev Batch (1st to 5th) <span class="caret-right"></span></a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li><a href="/courses/neev/class1.php">Class 1</a></li>
                                <li><a href="/courses/neev/class2.php">Class 2</a></li>
                                <li><a href="/courses/neev/class3.php">Class 3</a></li>
                                <li><a href="/courses/neev/class4.php">Class 4</a></li>
                                <li><a href="/courses/neev/class5.php">Class 5</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown">
                            <a href="#">Super 8 Batch (6th to 8th) <span class="caret-right"></span></a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li><a href="/courses/super8/class6.php">Class 6</a></li>
                                <li><a href="/courses/super8/class7.php">Class 7</a></li>
                                <li><a href="/courses/super8/class8.php">Class 8</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown">
                            <a href="#">Samarpan Batch (9th) <span class="caret-right"></span></a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li><a href="/courses/samarpan/class9.php">Class 9</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown">
                            <a href="#">Sampoorna Samarpan (10th) <span class="caret-right"></span></a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li><a href="/courses/Sampoorna Samarpan/class10.php">Class 10</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown">
                            <a href="#">Exam Photo Batch (11th) <span class="caret-right"></span></a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li><a href="/courses/exam/science.php">Class 11th SCIENCE</a></li>
                                <li><a href="/courses/exam/commerce.php">Class 11th COMMERCE</a></li>
                                <li><a href="/courses/exam/arts.php">Class 11th ARTS</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown">
                            <a href="#">Paritosh Batch (12th) <span class="caret-right"></span></a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li><a href="/courses/12th/arts.php">Class 12th ARTS</a></li>
                                <li><a href="/courses/12th/commerce.php">Class 12th COMMERCE</a></li>
                                <li><a href="/courses/12th/science.php">Class 12th SCIENCE</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown">
                            <a href="#">Graduation & Post Graduation <span class="caret-right"></span></a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li class="dropdown-item dropdown">
                                    <a href="#">UG Courses <span class="caret-right"></span></a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li><a href="/courses/ug/bcom.php">B.Com</a></li>
                                        <li><a href="/courses/ug/ba.php">BA</a></li>
                                        <li><a href="/courses/ug/bba.php">BBA</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-item dropdown">
                                    <a href="#">PG Courses <span class="caret-right"></span></a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li><a href="/courses/pg/mcom.php">M.Com</a></li>
                                        <li><a href="/courses/pg/ma.php">MA</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown">
                            <a href="#">Sankalp Se Selection (Government Exams) <span class="caret-right"></span></a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li class="dropdown-item dropdown">
                                    <a href="#">Government Exams <span class="caret-right"></span></a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li><a href="/courses/government/ssc-chsl.php">SSC CHSL (10+2 Level)</a></li>
                                        <li><a href="/courses/government/ssc-gd.php">SSC GD Constable</a></li>
                                        <li><a href="/courses/government/ssc-mts.php">SSC MTS (Multi-Tasking Staff)</a></li>
                                        <li><a href="/courses/government/ssc-steno.php">SSC Stenographer (Grade C & D)</a></li>
                                        <li><a href="/courses/government/railway-groupd.php">RAILWAY RRB Group D</a></li>
                                        <li><a href="/courses/government/railway-ntpc.php">RAILWAY RRB NTPC</a></li>
                                        <li><a href="/courses/government/banking.php">Banking</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-item dropdown">
                                    <a href="#">Entrance Exams <span class="caret-right"></span></a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li><a href="/courses/entrance/clat.php">CLAT</a></li>
                                        <li><a href="/courses/entrance/cuet.php">CUET</a></li>
                                    </ul>
                                </li>
                                <li><a href="/courses/government/ccc.php">Computer Courses (CCC) Govt approved</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#material" class="nav-link">Study Materials <span class="caret-down"></span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item dropdown">
                            <a href="#">Notes <span class="caret-right"></span></a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li><a href="#">Class 6th</a></li>
                                <li><a href="#">Class 7th</a></li>
                                <li><a href="#">Class 8th</a></li>
                                <li><a href="#">Class 9th</a></li>
                                <li><a href="#">Class 10th</a></li>
                                <li><a href="#">Class 11th</a></li>
                                <li><a href="#">Class 12th</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown">
                            <a href="#">Sample Paper <span class="caret-right"></span></a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li><a href="#">Class 10th</a></li>
                                <li><a href="#">Class 12th</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown">
                            <a href="#">PYQ (Questions) <span class="caret-right"></span></a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li><a href="#">Class 10th</a></li>
                                <li><a href="#">Class 12th</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown">
                            <a href="#">Maths Formula <span class="caret-right"></span></a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li><a href="#">Class 6th</a></li>
                                <li><a href="#">Class 7th</a></li>
                                <li><a href="#">Class 8th</a></li>
                                <li><a href="#">Class 9th</a></li>
                                <li><a href="#">Class 10th</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Syllabus</a></li>
                        <li class="dropdown-item dropdown">
                            <a href="#">NCERT Solutions <span class="caret-right"></span></a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li><a href="#">Class 6th</a></li>
                                <li><a href="#">Class 7th</a></li>
                                <li><a href="#">Class 8th</a></li>
                                <li><a href="#">Class 9th</a></li>
                                <li><a href="#">Class 10th</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown">
                            <a href="#">Test Series <span class="caret-right"></span></a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li><a href="#">Class 8</a></li>
                                <li><a href="#">Class 9</a></li>
                                <li><a href="#">Class 10</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#ebooks" class="nav-link">E-BOOKS</a></li>
                <li class="nav-item dropdown">
                    <a href="#stories" class="nav-link">Success Stories <span class="caret-down"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Students Stories</a></li>
                        <li><a href="#">Career Counseling</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="#admission" class="btn btn-primary" style="font-weight: 900; padding: 0.6rem 1.2rem; margin-left: 10px;">Admission now</a></li>
            </ul>
        </div>
        
        <div class="nav-actions">
            <button class="theme-toggle" id="themeToggle" aria-label="Toggle Dark Mode">
                <svg class="sun-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                <svg class="moon-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
            </button>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</nav>
</header>
