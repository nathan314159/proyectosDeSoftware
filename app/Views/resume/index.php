<?php echo $this->extend('plantilla/layout'); ?>
<?php echo $this->section('contenido'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Your Name - PHP Developer</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<style>
    body {
  font-family: 'Inter', sans-serif;
  margin: 0;
  padding: 0;
  background: #f9f9f9;
  color: #222;
}

.cv-container {
  display: flex;
  max-width: 1200px;
  margin: 40px auto;
  background: #fff;
  box-shadow: 0 0 10px rgba(0,0,0,0.05);
}

.left-side, .right-side {
  padding: 40px;
}

.left-side {
  width: 65%;
  border-right: 1px solid #ddd;
}

.right-side {
  width: 35%;
  background-color: #FFECDB;
}

h1 {
  font-size: 2.2em;
  margin: 0;
}

h2 {
  margin: 5px 0 30px;
  font-weight: 400;
  color: #555;
}

h3 {
  font-size: 1.2em;
  /* color: #333; */
  color: red;
  margin-bottom: 10px;
  border-bottom: 2px solid #eee;
  padding-bottom: 4px;
}

.job {
  margin-bottom: 25px;
}

.job ul {
  padding-left: 20px;
  margin-top: 8px;
}

section p {
  margin-bottom: 12px;
}

.contact p, .contact a {
  margin: 4px 0;
  color: #333;
  font-size: 0.95em;
  word-break: break-word;
}

a {
  color: #0073b1;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

@media (max-width: 900px) {
  .cv-container {
    flex-direction: column;
  }

  .left-side, .right-side {
    width: 100%;
    border-right: none;
    padding: 30px;
  }
}

</style>

  <div class="cv-container">
    <!-- LEFT SIDE -->
    <div class="left-side">
      <h1>Your Name</h1>
      <h2>PHP Developer</h2>

      <section>
        <h3>Experience</h3>
        <div class="job">
          <strong>Facebook</strong> — PHP Back-End Developer<br/>
          <em>Feb 2019 – Present</em>
          <ul>
            <li>Implemented PHP microservices architecture for social media analytics.</li>
            <li>Created APIs, reduced frontend load time by 25%.</li>
            <li>Led security patching, eliminated key vulnerabilities.</li>
            <li>Used PHPUnit, reduced QA bugs by 20%.</li>
            <li>Optimized Eloquent ORM queries by 30%.</li>
          </ul>
        </div>

        <div class="job">
          <strong>Slack</strong> — PHP Application Developer<br/>
          <em>Aug 2016 – Jan 2019</em>
          <ul>
            <li>Built custom integration features (+15% engagement).</li>
            <li>Refactored with SOLID principles, improved maintainability.</li>
            <li>Wrote documentation, halved onboarding time.</li>
          </ul>
        </div>

        <div class="job">
          <strong>Resume Worded</strong> — Intern<br/>
          <em>Jan 2015 – Jul 2016</em>
          <ul>
            <li>Helped migrate to Laravel, improved dev consistency.</li>
            <li>Developed PHP-based internal communications tool.</li>
          </ul>
        </div>

        <div class="job">
          <strong>Upwork</strong> — Freelance PHP Developer<br/>
          <em>May 2013 – Dec 2014</em>
          <ul>
            <li>Delivered custom PHP solutions to 15+ clients (100% satisfaction).</li>
          </ul>
        </div>
      </section>

      <section>
        <h3>Education</h3>
        <p><strong>Resume Worded Institute</strong><br/>MSc Computer Science – 2016<br/>Specialization in Software Engineering</p>
        <p><strong>Resume Worded University</strong><br/>BSc Information Technology – 2013<br/>Cum Laude – studied part-time while freelancing</p>
      </section>
    </div>

    <!-- RIGHT SIDE -->
    <div class="right-side">
      <section class="contact">
        <p>City, Country</p>
        <p>(123) 456-789</p>
        <p>yourname@resumeworded.com</p>
        <p><a href="https://linkedin.com/in/your-profile" target="_blank">linkedin.com/in/your-profile</a></p>
      </section>

      <section>
        <h3>Skills</h3>
        <p><strong>Programming Languages:</strong> PHP, JavaScript (React, Node.js), SQL, HTML5, CSS3, JSON</p>
        <p><strong>Frameworks & Libraries:</strong> Laravel, Symfony, CodeIgniter, jQuery, Bootstrap</p>
        <p><strong>Databases & Tools:</strong> MySQL, PostgreSQL, MongoDB, Redis, Git, Docker</p>
        <p><strong>Development Practices:</strong> Agile, TDD, RESTful APIs, CI</p>
      </section>

      <section>
        <h3>Other</h3>
        <p><strong>Certifications:</strong> Zend Certified PHP Engineer (2018), AWS Certified Developer (2020)</p>
        <p><strong>Side Projects:</strong> Open-source e-commerce PHP framework, PHP FIG contributor</p>
        <p><strong>Conferences:</strong> Speaker at Intl. PHP Conf 2019, Attendee at Laracon US 2020</p>
        <p><strong>Professional Development:</strong> 'Advanced Security Coding' workshop, Enrolled in ML for Web Apps</p>
      </section>
    </div>
  </div>
</body>
</html>




<?php echo $this->endSection(); ?>