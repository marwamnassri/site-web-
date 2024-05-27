<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <title> Responsive Portfolio</title>
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
            <div class="action__btns">
                <p>My web site:</p>
                <button class="portfolio"><a href="https://github.com/marwamnassri/banque" download>Project1</a></button>
                <button class="portfolio"><a href="https://github.com/marwamnassri/Login1" download>Project2</a></button>
                <button class="portfolio"><a href="https://github.com/marwamnassri/CV-Marwa-Mnassri" download>Project3</a></button>
            </div>
            <div class="action__btns" style="margin-top: 20px;">
                <p>Figma experience:</p>
                <button class="portfolio"><a href="https://ibb.co/RCtHN6C" download>Project4</a></button>
                <button class="portfolio"><a href="https://ibb.co/S313PVy" download>Project5</a></button>
                <button class="portfolio"><a href="https://ibb.co/kHTvqTr" download>Project6</a></button>
            </div>
        </div>
        <div class="image">
            <img src="https://i.ibb.co/phCSXhn/445607458-1844059972776132-174440177464224265-n.jpg" alt="profile" />
        </div>
    </div>
</section>
</body>
</html>
