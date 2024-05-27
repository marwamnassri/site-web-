<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <title>Responsive Portfolio</title>
    <style>
        .large-icon {
            font-size: 50px;
        }
    </style>
</head>
<body>
<nav>
    <div class="nav__content">
        <div class="logo"><a href="#">Portfolio</a></div>
        <label for="check" class="checkbox">
            <i class="ri-menu-line"></i>
        </label>
        <input type="checkbox" name="check" id="check" />
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="skills.php">Skills</a></li>
            <li><a href="resume.php">Resume</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
</nav>
<section class="section">
    <div class="section__container">
        <div class="content">
            <p class="subtitle">HELLO</p>
            <h1 class="title">
                I'm <span>MARWA MNASSRI</span><br />
                Get in touch with me!
            </h1>
            <!-- Icônes pour les contacts avec la classe large-icon -->
            <div class="contact-icons">
                <a href="tel:29571947" target="_blank"><i class="ri-phone-line large-icon"></i></a>
                <a href="mailto:marwamnassri51@gmail.com" target="_blank"><i class="ri-mail-line large-icon"></i></a>
                <a href="https://github.com/marwamnassri" target="_blank"><i class="ri-linkedin-fill large-icon"></i></a>
            </div>
        </div>
        <div class="image">
            <img src="https://i.ibb.co/phCSXhn/445607458-1844059972776132-174440177464224265-n.jpg" alt="profile" />
        </div>
    </div>
</section>
</body>
</html>
