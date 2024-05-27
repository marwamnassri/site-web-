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
        /* Style pour le tableau */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        /* Style pour les cellules d'en-tête */
        th {
            background-color: #f2f2f2;
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        /* Style pour les cellules de données */
        td {
            border: 1px solid #dddddd;
            padding: 8px;
        }

        /* Style pour les lignes impaires */
        tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        /* Style pour les lignes au survol */
        tr:hover {
            background-color: #e2e2e2;
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
            <!-- Tableau de compétences -->
            <table>
                <tr>
                    <th>Skills</th>
                </tr>
                <tr>
                    <td>Developpement web et mobile</td>
                </tr>
                <tr>
                    <td>UX UI Designer</td>
                </tr>
                <tr>
                    <td>Front-end</td>
                </tr>
                <tr>
                    <td>Back-end</td>
                </tr>
            </table>


            <table>
                <tr>
                    <th>Technologies</th>
                </tr>
                <tr>
                    <td>HTML5</td>
                </tr>
                <tr>
                    <td>Figma</td>
                </tr>
                <tr>
                    <td>No sql</td>
                </tr>
                <tr>
                    <td>PHP</td>
                </tr>
                <tr>
                    <td>java</td>
                </tr>
                <tr>
                    <td>Bootstrap</td>
                </tr>
                <tr>
                    <td>CSS</td>
                </tr>
                <tr>
                    <td>P</td>
                </tr>
            </table>
        </div>
        <div class="image">
            <img src="https://i.ibb.co/phCSXhn/445607458-1844059972776132-174440177464224265-n.jpg" alt="profile" />
        </div>
    </div>
</section>
</body>
</html>
