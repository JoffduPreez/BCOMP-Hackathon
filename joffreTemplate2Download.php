<?php
require 'redirect.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$occupation = $_POST['occupation'];
$linkedin = $_POST['linkedin'];
$facebook = $_POST['facebook'];
$instagram = $_POST['instagram'];
$personalDescription = $_POST['personalDescription'];
$projectTitle1 = $_POST['projectTitle1'];
$projectDescription1 = $_POST['projectDescription1'];
$projectImage1 = $_POST['projectImage1'];
$projectTitle2 = $_POST['projectTitle2'];
$projectDescription2 = $_POST['projectDescription2'];
$projectImage2 = $_POST['projectImage2'];
$projectTitle3 = $_POST['projectTitle3'];
$projectDescription3 = $_POST['projectDescription3'];
$projectImage3 = $_POST['projectImage3'];
$skill1 = $_POST['skill1'];
$skillLevel1 = $_POST['skillLevel1'];
$skill2 = $_POST['skill2'];
$skillLevel2 = $_POST['skillLevel2'];
$skill3 = $_POST['skill3'];
$skillLevel3 = $_POST['skillLevel3'];
$skill4 = $_POST['skill3'];
$skillLevel4 = $_POST['skillLevel3'];
$skill5 = $_POST['skill3'];
$skillLevel5 = $_POST['skillLevel3'];


$myfile = fopen("userFiles/index.html", "w") or die("Unable to open file!");
$txt = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet" />
    <link rel="stylesheet" href="main.css">
    <title>Portfolio Template</title>
</head>
<body>
    <header id="header">
        <h1>' . $firstName . ' ' . $lastName . '</h1>
        <p id="personalOccupation">' . $occupation . '</p>
        <div id="socialLinks">
            <a href="' . $linkedin . '">
                <i class="fab fa-linkedin fa-2x"></i>
            </a>
            <a href="' . $facebook . '">
                <i class="fab fa-facebook-square fa-2x"></i>
            </a>
            <a href="' . $instagram . '">
                <i class="fab fa-instagram fa-2x"></i>
            </a>
        </div>
        <nav>
            <a href="#about">About Me</a>
            <a href="#workExperience">Projects</a>
            <a href="#skills">Skills</a>
            <a href="#resume">Resume</a>
        </nav>
    </header>

    <div id="container">
        <section id="about">
            <div class="sectionContainer">
                <h2 class="title">About Me</h2>
                <p class="basicText">' . $personalDescription . '</p>
            </div>
        </section>
    
        <section id="workExperience">
            <h2 class="title">Work Experience</h2>
            <div id="workExperienceContainer">
                <div class="workExperienceBox">
                    <img class="workExperienceImage" src="' . $projectImage1 . '" alt="Logo 1 image">
                    <p class="workExperienceTitle">' . $projectTitle1 . '</p>
                    <p class="workExperienceDescription">' . $projectDescription1 . '</p>
                </div>
                <div class="workExperienceBox">
                    <img class="workExperienceImage" src="' . $projectImage2 . '" alt="Logo 2 image">
                    <p class="workExperienceTitle">' . $projectTitle2 . '</p>
                    <p class="workExperienceDescription">' . $projectDescription2 . '</p>
                </div>
                <div class="workExperienceBox">
                    <img class="workExperienceImage" src="' . $projectImage3 . '" alt="Logo 3 image">
                    <p class="workExperienceTitle">' . $projectTitle3 . '</p>
                    <p class="workExperienceDescription">' . $projectDescription3 . '</p>
                </div>
            </div>
        </section>
    
        <section id="skills">
            <div class="sectionContainer">
                <h2 class="title">Skills</h2>
                
                <div class="skillBox">
                    <p class="basicText">' . $skill1 . '</p>
                    <div class="skillBar">
                       <div class="completeSkill1"></div>
                    </div>
                </div>
                <div class="skillBox">
                    <p class="basicText">' . $skill2 . '</p>
                    <div class="skillBar">
                       <div class="completeSkill2"></div>
                    </div>
                </div>
                <div class="skillBox">
                    <p class="basicText">' . $skill3 . '</p>
                    <div class="skillBar">
                       <div class="completeSkill3"></div>
                    </div>
                </div>
                <div class="skillBox">
                    <p class="basicText">' . $skill4 . '</p>
                    <div class="skillBar">
                       <div class="completeSkill4"></div>
                    </div>
                </div>
                <div class="skillBox">
                    <p class="basicText">' . $skill5 . '</p>
                    <div class="skillBar">
                       <div class="completeSkill5"></div>
                    </div>
                </div>
            </div>
    
        </section>
    </div>
    
</body>
</html>';

fwrite($myfile, $txt);
fclose($myfile);


$myfile = fopen("userFiles/main.css", "w") or die("Unable to open file!");
$txt = "/* Container and main styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
}

body {
    font-family: 'Dosis', sans-serif;
    line-height: 1.6;
    background: white;
}

/* Header */
#header {
    color: black;
    height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: url('/images/background2.jpeg') no-repeat center center / cover;
}

#header h1 {
    font-size: 80px;
}

#header p {
    font-size: 25px;
}

#socialLinks {
    margin: 12px 0 10px 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

#socialLinks a {
    text-decoration: none;
    padding: 0 20px;
    color: black;
}

nav a {
    text-decoration: none;
    color: black;
    padding: 0 20px;
    font-size: 20px;
}

/* Main content */
#container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.sectionContainer {
    width: 65vw;
    margin: auto;
}

.title {
    margin-bottom: 1vh;
    font-size: 30px;
}

.basicText {
    font-size: 18px;
}

/* About section */
#about {
    width: 100vw;
    background-color: #53acef;
    padding: 3vh 0;
    text-align: center;
    color: white;
}

/* Projects section */
#workExperience {
    width: 80vw;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 3vh 0 5vh 0;
}

#workExperienceContainer {
    display: flex;
    justify-content: center;
}

.workExperienceBox {
    padding: 2vh 2vw;
    transition-property: background-color;
    transition-duration: 0.75s;
    border-radius: 10px;
    max-width: 33%;
}

.workExperienceBox:hover {
    background-color: #e7e7e7;
    border-radius: 10px;
}

.workExperienceBox:hover .workExperienceImage {
    border-radius: 10px;
}

.workExperienceTitle {
    font-size: 20px;
    margin-bottom: 1vh;
}

.workExperienceImage {
    width: 100%;
    transition-property: border-radius;
    transition-duration: 0.75s;
}

/* Skills section */
#skills {
    width: 100vw;
    background-color: #53acef;
    padding: 3vh 0;
    text-align: center;
    color: white;
}

#skills .sectionContainer {
    width: 50vw;
}

.skillBox {
    margin: 2vh 0;
    text-align: left;
}

.skillBar {
    height: 2.5vh;
    width: 100%;
    background: white;
    border-radius: 10px;
}

.completeSkill1 {
    border-top-left-radius: 7px;
    border-bottom-left-radius: 7px;
    background: #5680E9;
    height: 100%;
    width: " . $skillLevel1 . "0" . "%;
}
.completeSkill2 {
    border-top-left-radius: 7px;
    border-bottom-left-radius: 7px;
    background: #5680E9;
    height: 100%;
    width: " . $skillLevel2 . "0" . "%;
}
.completeSkill3 {
    border-top-left-radius: 7px;
    border-bottom-left-radius: 7px;
    background: #5680E9;
    height: 100%;
    width: " . $skillLevel3 . "0" . "%;
}
.completeSkill4 {
    border-top-left-radius: 7px;
    border-bottom-left-radius: 7px;
    background: #5680E9;
    height: 100%;
    width: " . $skillLevel4 . "0" . "%;
}
.completeSkill5 {
    border-top-left-radius: 7px;
    border-bottom-left-radius: 7px;
    background: #5680E9;
    height: 100%;
    width: " . $skillLevel5 . "0" . "%;
}";

fwrite($myfile, $txt);
fclose($myfile);

redirect('/download.html');

?>