<?php
require 'redirect.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$occupation = $_POST['occupation'];
$linkedin = $_POST['linkedin'];
$github = $_POST['github'];
$instagram = $_POST['instagram'];
$degree = $_POST['degree'];
$school = $_POST['school'];
$educationDescription = $_POST['educationDescription'];
$personalDescription = $_POST['personalDescription'];
$skillsDescription = $_POST['skillsDescription'];
$projectTitle1 = $_POST['projectTitle1'];
$projectDescription1 = $_POST['projectDescription1'];
$projectImage1 = $_POST['projectImage1'];
$projectTitle2 = $_POST['projectTitle2'];
$projectDescription2 = $_POST['projectDescription2'];
$projectImage2 = $_POST['projectImage2'];
$projectTitle3 = $_POST['projectTitle3'];
$projectDescription3 = $_POST['projectDescription3'];
$projectImage3 = $_POST['projectImage3'];


$myfile = fopen("userFiles/index.html", "w") or die("Unable to open file!");
$txt = '<!-- almost identical to the html from the first template-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=PT+Sans:wght@700&display=swap" rel="stylesheet">

    <title>Template</title>

    <link rel="stylesheet" href="main.css">
</head>
<body>
    <!-- Nav Bar -->
    <header>
        <div class="top-header">
            <h2 id="nav-name"><a class="Name-Text" href="">' . $firstName . ' ' . $lastName . '</a></h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#Projects">Projects</a></li>
            </ul>
        </div>

        <div class="Contact-List">
            <a href="' . $linkedin . '"><img src="images\linkedin-logo.png"></a>
            <a href="' . $instagram . '"><img src="images\instagram-logo.png"></a>
            <a href="' . $github . '"><img src="images\git-logo.jpg"></a>
        </div>
    </header>

    <!-- Home -->
    <section id="Home">
        <div class="Profile">
            <img id="Profile-Image" src="images\headshotphoto.jpg" alt="profile image">
        </div>
    </section>

    <!-- About -->
    <section id="About">
        <div class="about-grid">
            <div class="About-Text">
                <h1>About Me</h1>
                <h2 class="about-subhead">Student</h2>
                <p>
                    ' . $personalDescription . '
                </p>
            </div>
            
            <div class="About-Text">
                <div class="education-title">
                    <h1>Education</h1>
                    <h4>' . $degree . ' <br> ' . $school . '</h4>
                </div>
                <p>
                    ' . $educationDescription . '
                </p>
            </div>

            <div class="About-Text">
                <h1 class="skills-title">Skills</h1>

                <p>
                    ' . $skillsDescription . '
                </p>
            </div>
        </div>
    </section>

    <!-- Projects, 90 words max for description-->
    <section id="Projects">

        <h1>Projects</h1>

        <div class="fill-width">
            <section class="project">
                <img src="' . $projectImage1 . '" alt="project image">

                <div class="Project-Description">
                    <h3>' . $projectTitle1 . '</h3>
                    <p>' . $projectDescription1 . '</p>
                </div>
            </section>
        </div>

        <div class="fill-width">
            <section class="project">
                <img src="' . $projectImage2 . '" alt="project image">

                <div class="Project-Description">
                    <h3>' . $projectTitle2 . '</h3>
                    <p>' . $projectDescription2 . '</p>
                </div>
            </section>
        </div>

        <div class="fill-width">
            <section class="project">
                <img src="' . $projectImage3 . '" alt="project image">

                <div class="Project-Description">
                    <h3>' . $projectTitle3 . '</h3>
                    <p>' . $projectDescription3 . '</p>
                </div>
            </section>
        </div>
    </section>

    <!-- Contact Me -->
    <footer id="Contact">
            
    </footer>
</body>
</html>';

fwrite($myfile, $txt);
fclose($myfile);


$myfile = fopen("userFiles/main.css", "w") or die("Unable to open file!");
$txt = "/* Global Styles */
html {
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
    background-image: url(\"images/background-white.jpg\");
    background-repeat: no-repeat;
    background-attachment: fixed;
}
h1, h2, h3 {
    font-family: 'PT Sans', sans-serif;
}
p {
    font-family: 'Montserrat', sans-serif;
}
*, *:before, *:after {
    box-sizing: inherit;
}
body {
    color: rgb(50, 50, 50);
}
a {
    text-decoration: none;
    color: rgb(50, 50, 50);
}
a:hover {
    color: rgb(255, 126, 0);
}

/* Nav Bar */
#nav-name {
    margin-left: 20px;
}
header {
    font-size: 20px;
    font-weight: bold;
}
.top-header > a {
    text-align: left;
    margin-left: 20px;
    font-size: 32px;
}
ul {
    margin-top: 50px;
    margin-left: -40px;
}
header li {
    list-style: none;
    padding: 10px 20px;
    margin: 20px 0;
}
a img {
    bottom: 0;
    margin-left: 15px;
    width: 40px;
    display: block;
    padding: 5px;
}
a img:hover {
    border: 1px solid rgb(255, 126, 0);
}

/* Home */

.Profile {
    display: block;
    text-align: center;
}

.Profile img {
    border-radius: 30px;
    border: 4px solid rgb(255, 126, 0);
}
.Profile-Text {
    text-align: center;
}

/* About */
#About {
    margin: 200px auto;
}
.About-Text {
    max-width: 400px;
    border: 5px solid black;
    border-radius: 20px;
    min-height: 500px;
    box-shadow: 4px 8px rgb(255, 126, 0);
    background-color: white;
}
.About-Text > * {
    margin: 9% 20px;
}
.education-title, .About-Text h1 {
    margin-bottom: 20px;
    text-align: center;
}

.about-subhead {
    text-align: center;
    padding-bottom: 7px;
    margin: 0;
}

.skills-title {
    padding-bottom: 55px;
}

/* Project */
#Projects {
    width: 70%;
    margin: 100px auto;
}
#Projects > h1 {
    text-align: center;
    font-size: 40px;
}

.project img {
    width: 250px;
    height: 250px;
}
.fill-width {
    background-color: white;
    border: 4px solid black;
    border-radius: 10px;
    margin: 50px 0;
    min-height: 280px;
    box-shadow: 4px 8px rgb(255, 126, 0);
    
}
.Project-Description {
    overflow: hidden;
}



@media screen and (min-width: 1050px) {
    .about-grid {
        width: 90%;
        margin: 0 auto;
        min-height: 500px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        column-gap: 6%;
    }
    .project {
        display: grid;
        grid-template-columns: 1fr 2fr;
        column-gap: 40px;
        margin: 10px 10px;
    }
}

@media screen and (max-width: 1049px) {
    .about-grid {
        width: 70%;
        margin: 0 auto;
    }
    .About-Text {
        margin-top: 100px;
    }
    .project {
        display: inline;
    }
    .project img {
        margin: 10px;
    }
    .Project-Description {
        margin: 5px;
    }
}

@media screen and (max-width: 800px) {
    .project {
        display: block;
    }
}

@media screen and (max-width: 600px) {
    .Contact-List {
        position: absolute;
        right: 100px;
        top: 20px;
    }
    .top-header ul li {
        display: inline;
    }
    header {
        background-color: white;
    }
    #Profile-Image {
        margin-top: 100px; 
    }
}

@media screen and (min-width: 601px) {
    body {
        margin: 0 0 0 200px;
    }
    header {
        position: fixed;
        height: 100%;
        width: 180px;
        top: 0;
        left: 0;
        border-right: 2px solid rgb(50, 50, 50);
    }
    header {
        background-image: linear-gradient(to right, rgb(220, 220, 220), rgb(220, 220, 220),rgb(220, 220, 220),rgb(220, 220, 220), black);
    }

    #Profile-Image {
        margin: 5% auto;
    }
}

@media screen and (min-width: 1250px) {
    #Home {
        display: block;
    }
}

@media screen and (min-width: 500px) {
    .Profile img {
        width: 400px;
    }
}

@media screen and (max-width: 499px) {
    .Profile img {
        width: 300px;
    }
}";

fwrite($myfile, $txt);
fclose($myfile);

redirect('/');

?>