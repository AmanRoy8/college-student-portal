<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raisoni Student Portal</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header class="site-header">
    <div class="container nav">
        <div class="brand">RAISONI <span>STUDENT PORTAL</span></div>
        <nav>
            <a href="index.php">Home</a>
            <a href="#admissions">Admissions</a>
            <a href="#notices">Notices</a>
            <a href="student/login.php" class="btn small">Student Login</a>
        </nav>
    </div>
</header>

<main>
<section class="hero">
    <div class="container hero-grid">
        <div>
            <p class="eyebrow">STUDENT INFORMATION SYSTEM</p>
            <h1>One place for college updates and student results.</h1>
            <p class="hero-copy">A database-backed college portal for announcements, admissions information, examination results and student access.</p>
            <a href="student/login.php" class="btn">View Student Results</a>
        </div>
        <div class="hero-card">
            <div class="stat"><strong>24/7</strong><span>Student access</span></div>
            <div class="stat"><strong>Secure</strong><span>Credential-based results</span></div>
            <div class="stat"><strong>Centralized</strong><span>College information</span></div>
        </div>
    </div>
</section>

<section id="notices" class="section">
    <div class="container">
        <div class="section-heading">
            <p class="eyebrow">LATEST INFORMATION</p>
            <h2>Announcements & Results</h2>
        </div>
        <div class="cards">
            <article class="card">
                <h3>Semester Examination Results</h3>
                <p>Students can access their examination results through the student portal.</p>
            </article>
            <article class="card">
                <h3>Admission Updates</h3>
                <p>View admission-related information, important dates and application guidance.</p>
            </article>
            <article class="card">
                <h3>College Events</h3>
                <p>Stay updated with upcoming academic and student activities.</p>
            </article>
        </div>
    </div>
</section>

<section id="admissions" class="section alt">
    <div class="container two-col">
        <div>
            <p class="eyebrow">ADMISSIONS</p>
            <h2>Information for prospective students</h2>
            <p>Explore admission information and keep track of important notices published by the institution.</p>
        </div>
        <div class="info-list">
            <div><strong>Courses</strong><span>Undergraduate & postgraduate information</span></div>
            <div><strong>Documents</strong><span>Application and admission requirements</span></div>
            <div><strong>Updates</strong><span>Important notices and deadlines</span></div>
        </div>
    </div>
</section>
</main>

<footer>
    <div class="container footer-inner">
        <span>College Student Information Portal</span>
        <span>Academic Project</span>
    </div>
</footer>
</body>
</html>
