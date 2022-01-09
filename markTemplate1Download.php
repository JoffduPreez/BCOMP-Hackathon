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
$txt = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <title>Template</title>

    <link rel="stylesheet" href="main.css">
</head>
<body>
    <!-- Nav Bar -->
    <header>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#About">About</a></li>
            <li><a href="#Projects">Projects</a></li>
            <li><a href="#Contact">Contact</a></li>
        </ul>
    </header>

    <!-- Home -->
    <section id="Home">
        <div class="intro-text">
            <h1>' . $firstName . ' ' . $lastName . '</h1>
            <h3>' . $occupation . '</h3>
        </div>
        <img src="images/smilingGuy3.jpg" alt="profile image">
    </section>

    <!-- About -->
    <section id="About" class="fill-width">
        <div class="about-grid">
            <div>
                <h1 class="title-coloring">About Me</h1>
                <p>
                    ' . $personalDescription . '
                </p>
            </div>
            
            <img src="images\smilingGuy3.jpg" alt="profile image">
    
            <div>
                <h1 class="title-coloring">Education</h1>
                <h4>' . $degree . ' <br> ' . $school . '</h4>
                <p>
                    ' . $educationDescription . '
                </p>
            </div>

            <div>
                <h1 class="title-coloring">Skills</h1>

                <p>
                    ' . $skillsDescription . '
                </p>
            </div>
        </div>
        <div id="Projects"></div>
    </section>

    
    <section>   <!-- Projects-->

        <h1 id="Project-Title">Projects</h1>

        <div class="fill-width">
            <section class="project">
                <img src="' . $projectImage1 . '" alt="project image">

                <div class="Project-Description">
                    <h3 class="title-coloring">' . $projectTitle1 . '</h3>
                    <p>' . $projectDescription1 . '</p>
                </div>
            </section>
        </div>

        <div class="fill-width">
            <section class="project">
                <img src="' . $projectImage2 . '" alt="project image">

                <div class="Project-Description">
                    <h3 class="title-coloring">' . $projectTitle2 . '</h3>
                    <p>' . $projectDescription2 . '</p>
                </div>
            </section>
        </div>

        <div class="fill-width">
            <section class="project">
                <img src="' . $projectImage3 . '" alt="project image">

                <div class="Project-Description">
                    <h3 class="title-coloring">' . $projectTitle3 . '</h3>
                    <p>' . $projectDescription3 . '</p>
                </div>
            </section>
        </div>
    </section>

    <!-- Contact Me -->
    <footer id="Contact" class="fill-width">
            <div class="Contact-List">
                <a href="' . $linkedin . '">Linkedin</a>
                <a href="' . $instagram . '">Instagram</a>
                <a href="' . $github . '">Github</a>
            </div>
    </footer>
</body>
</html>';

fwrite($myfile, $txt);
fclose($myfile);


$myfile = fopen("userFiles/main.css", "w") or die("Unable to open file!");
$txt = "/* Global Styles */

html {
    box-sizing: border-box;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}

p {
    font-family: 'Montserrat', sans-serif;
}
*, *:before, *:after {
    box-sizing: inherit;
}
body {
    margin: 0;
    background-color: black;
    color: rgba(228, 228, 228, 0.967);
}
a {
    font-weight: bold;
    text-decoration: none;
    color: rgba(228, 228, 228, 0.967);
}

a:hover {
    color: rgb(232, 104, 38);
}

.project > img {
    width: 200px;
    height: 200px;
    border: 2px solid white;
}

.title-coloring {
    color:rgb(232, 104, 38);
}

/* Nav */
header {
    height: 60px;
    width: 100%;
    background-color: rgb(0, 0, 0, 0.85);
    display: block;
    font-size: 20px;
    position: fixed;
    top: 0;
    border-bottom: 1px solid rgb(232, 104, 38, 0.85);
}
ul {
    float: left;
}
li {
    list-style: none;
    display: inline;
    padding:10px 20px;
    border-radius: 10px;
}

header + section {
    clear: both;
}

.fill-width {
    background-image: linear-gradient(to bottom, rgb(30, 30, 30), rgb(15, 15, 15), black, rgb(15, 15, 15), rgb(30, 30, 30));
    padding: 50px 0;
}

/* Home */
#Home {
    margin: 150px auto 15% auto;
    display: grid;
    grid-template-columns: 1fr 2fr;
    column-gap: 100px;
    width: 60%;
}

#Home > img {
    width: 400px;
    height: 400px;
    border-radius: 175px;
    padding-left: 50px;
}

.intro-text > h1 {
    font-family: 'Trebuchet MS', sans-serif;
    padding-top: 75px;
    font-size: 40px;
}
.intro-text > h3 {
    color: rgb(232, 104, 38);
}


/* About */

.about-grid {
    width: 70%;
    margin: 0 auto;
}

.about-grid img {
    width: 300px;
    margin: auto;
}

.about-grid h1 {
    text-align: center;
}

/* Projects */

#Project-Title {
    font-size: 40px;
    text-align: center;
}

.project {
    color: rgba(228, 228, 228, 0.967);
    display: grid;
    grid-template-columns: 1fr 2fr;
    column-gap: 40px;
    width: 70%;
    margin: 0 auto;
}

.Project-Description {
    max-width: 600px;
}

/* Contact Me */
footer {
    background-color: rgb(30, 30, 30);
}

.Contact-List {
    padding-top: 100px;
    height: 200px;
    text-align: center;
}

.Contact-List a {
    font-size: 20px;
    padding: 15px 15px;
    margin: 40px 20px;
}




/* MEDIA */
@media screen and (min-width: 1100px) {
    
    .about-grid {
        column-gap: 30%;
    }
    
}

@media screen and (max-width: 1099px) and (min-width: 901px) {
    .about-grid {
        column-gap: 10%;
    }
    .about-grid > div{
        padding: 10px;
        border: 2px solid rgb(232, 104, 38);
        border-radius: 5px;
    }
}

@media screen and (min-width: 901px) {
    .about-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        row-gap: 50px;
    }
}

@media screen and (max-width: 900px) {
    .about-grid > img {
        position: fixed;
        left: -1000px;
        top: -1000px;
    }
    .about-grid div {
        padding: 20px;
    }
}

@media screen and (max-width: 700px) {
    .fill-width {
        width: 200%;
    }
}";

fwrite($myfile, $txt);
fclose($myfile);

redirect('/');

?>