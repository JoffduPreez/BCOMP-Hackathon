<?php
require 'redirect.php';

$firstName = $_POST['firstName'];
$age = $_POST['age'];
$topSkill = $_POST['topSkill'];
$experienceYears = $_POST['experienceYears'];
$languages = $_POST['languages'];
$lastName = $_POST['lastName'];
$occupation = $_POST['occupation'];
$email = $_POST['email'];
$personalDescription = $_POST['personalDescription'];
$headshot = $_POST['headshot'];
$address = $_POST['address'];
$achievementDescription1 = $_POST['achievementDescription1'];
$achievementDescription2 = $_POST['achievementDescription2'];
$achievementDescription3 = $_POST['achievementDescription3'];
$projectTitle1 = $_POST['projectTitle1'];
$projectDescription1 = $_POST['projectDescription1'];
$projectImage1 = $_POST['projectImage1'];
$projectTitle2 = $_POST['projectTitle2'];
$projectDescription2 = $_POST['projectDescription2'];
$projectImage2 = $_POST['projectImage2'];
$projectTitle3 = $_POST['projectTitle3'];
$projectDescription3 = $_POST['projectDescription3'];
$projectImage3 = $_POST['projectImage3'];
$projectTitle4 = $_POST['projectTitle4'];
$projectDescription4 = $_POST['projectDescription4'];
$projectImage4 = $_POST['projectImage4'];
$projectTitle5 = $_POST['projectTitle5'];
$projectDescription5 = $_POST['projectDescription5'];
$projectImage5 = $_POST['projectImage5'];
$projectTitle6 = $_POST['projectTitle6'];
$projectDescription6 = $_POST['projectDescription6'];
$projectImage6 = $_POST['projectImage6'];
$projectTitle7 = $_POST['projectTitle7'];
$projectDescription7 = $_POST['projectDescription7'];
$projectImage7 = $_POST['projectImage7'];
$projectTitle8 = $_POST['projectTitle8'];
$projectDescription8 = $_POST['projectDescription8'];
$projectImage8 = $_POST['projectImage8'];
$skillTitle1 = $_POST['skillTitle1'];
$skillImage1 = $_POST['skillImage1'];
$skillTitle2 = $_POST['skillTitle2'];
$skillImage2 = $_POST['skillImage2'];
$skillTitle3 = $_POST['skillTitle3'];
$skillImage3 = $_POST['skillImage3'];
$skillTitle4 = $_POST['skillTitle4'];
$skillImage4 = $_POST['skillImage4'];
$skillTitle5 = $_POST['skillTitle5'];
$skillImage5 = $_POST['skillImage5'];
$skillTitle6 = $_POST['skillTitle6'];
$skillImage6 = $_POST['skillImage6'];
$edcationTitle1 = $_POST['edcationTitle1'];
$edcationDescription1 = $_POST['edcationDescription1'];
$edcationTitle2 = $_POST['edcationTitle2'];
$edcationDescription2 = $_POST['edcationDescription2'];
$edcationTitle3 = $_POST['edcationTitle3'];
$edcationDescription3 = $_POST['edcationDescription3'];
$edcationTitle4 = $_POST['edcationTitle4'];
$edcationDescription4 = $_POST['edcationDescription4'];
$edcationTitle5 = $_POST['edcationTitle5'];
$edcationDescription5 = $_POST['edcationDescription5'];
$edcationTitle6 = $_POST['edcationTitle6'];
$edcationDescription6 = $_POST['edcationDescription6'];


$myfile = fopen("userFiles/index.html", "w") or die("Unable to open file!");
$txt = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="main.css">

</head>
<body>
    
<!-- navbar section starts  -->

<nav class="navbar">
    <a href="/.html"> <span>home</span> </a>
    <a href="about.html"> <span>about</span> </a>
    <a href="projects.html">  <span>portfolio</span> </a>
    <a href="mailto:">  <span>contact</span> </a>
</nav>

<!-- navbar section ends -->

<!-- home section starts  -->

<section class="home">

    <div class="image">
        <img src="images/headshot.jpg" alt="">
    </div>

    <div class="content">
        <h3>hi, i am ' . $firstName . '</h3>
        <span>' . $occupation . '</span>
        <p>' . $personalDescription . '</p>
    </div>

</section>

<!-- home section ends -->

</body>
</html>';

fwrite($myfile, $txt);
fclose($myfile);

$myfile = fopen("userFiles/about.html", "w") or die("Unable to open file!");
$txt = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="main.css">

</head>
<body>
    
<!-- navbar section starts  -->

<nav class="navbar">
    <a href="/.html"> <span>home</span> </a>
    <a href="about.html"> <span>about</span> </a>
    <a href="projects.html">  <span>portfolio</span> </a>
    <a href="mailto:">  <span>contact</span> </a>
</nav>

<!-- navbar section ends -->

<!-- about section starts  -->

<section class="about">

    <h1 class="heading"> about <span>me</span> </h1>

    <div class="row">

        <div class="info-container">

            <h1>personal info</h1>

            <div class="box-container">

                <div class="box">
                    <h3> <span>name : </span>' . $firstName . '</h3>
                    <h3> <span>age : </span>' . $age . '</h3>
                    <h3> <span>email : </span>' . $email . '</h3>
                    <h3> <span>address : </span>' . $address . '</h3>
                </div>
    
                <div class="box">
                    <h3> <span> top skill : </span>' . $topSkill . '</h3>
                    <h3> <span>experience : </span>' . $experienceYears . '</h3>
                    <h3> <span>languages : </span>' . $languages . '</h3>
                </div>

            </div>

        </div>

        <div class="count-container">

            <div class="box">
                <p>' . $achievementDescription1 . '</p>
            </div>

            <div class="box">
                <p>' . $achievementDescription2 . '</p>
            </div>

            <div class="box">
                <p>' . $achievementDescription3 . '</p>
            </div>

        </div>

    </div>

</section>

<!-- about section ends -->

<!-- skills section starts  -->

<section class="skills">

    <h1 class="heading"> <span>my</span> skills </h1>

    <div class="box-container">
        <div class="box">
            <img src="' . $skillImage1 . '">
            <h3>' . $skillTitle1 . '</h3>
        </div>
        <div class="box">
            <img src="' . $skillImage2 . '">
            <h3>' . $skillTitle2 . '</h3>
        </div>
        <div class="box">
            <img src="' . $skillImage3 . '">
            <h3>' . $skillTitle3 . '</h3>
        </div>
        <div class="box">
            <img src="' . $skillImage4 . '">
            <h3>' . $skillTitle4 . '</h3>
        </div>
        <div class="box">
            <img src="' . $skillImage5 . '">
            <h3>' . $skillTitle5 . '</h3>
        </div>
        <div class="box">
            <img src="' . $skillImage6 . '">
            <h3>' . $skillTitle6 . '</h3>
        </div>
    </div>

</section>

<!-- skills section ends -->

<!-- education section starts  -->

<section class="education">

    <h1 class="heading"> <span>my</span> education </h1>

    <div class="box-container">

        <div class="box">
            <span>2015 - 2016</span>
            <h3>' . $edcationTitle1 . '</h3>
            <p>' . $edcationDescription1 . '</p>
        </div>

        <div class="box">
            <span>2015 - 2016</span>
            <h3>' . $edcationTitle2 . '</h3>
            <p>' . $edcationDescription2 . '</p>
        </div>

        <div class="box">
            <span>2015 - 2016</span>
            <h3>' . $edcationTitle3 . '</h3>
            <p>' . $edcationDescription3 . '</p>
        </div>

        <div class="box">
            <span>2015 - 2016</span>
            <h3>' . $edcationTitle4 . '</h3>
            <p>' . $edcationDescription4 . '</p>
        </div>

        <div class="box">
            <span>2015 - 2016</span>
            <h3>' . $edcationTitle5 . '</h3>
            <p>' . $edcationDescription5 . '</p>
        </div>

        <div class="box">
            <span>2015 - 2016</span>
            <h3>' . $edcationTitle6 . '</h3>
            <p>' . $edcationDescription6 . '</p>
        </div>
    </div>

</section>

<!-- education section ends -->

</body>
</html>';

fwrite($myfile, $txt);
fclose($myfile);


$myfile = fopen("userFiles/projects.html", "w") or die("Unable to open file!");
$txt = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="main.css">

</head>
<body>
    
<!-- navbar section starts  -->

<nav class="navbar">
    <a href="/.html"> <span>home</span> </a>
    <a href="about.html"> <span>about</span> </a>
    <a href="projects.html">  <span>portfolio</span> </a>
    <a href="mailto:">  <span>contact</span> </a>
</nav>

<!-- navbar section ends -->

<!-- portfolio section starts  -->

<section class="portfolio">

    <h1 class="heading"> <span>my</span> work </h1>

    <div class="box-container">

        <div class="box">
            <img src="' . $projectImage1 . '" alt="">
            <div class="content">
                <h3>' . $projectTitle1 . '</h3>
                <p>' . $projectDescription1 . '</p>
            </div>
        </div>

        <div class="box">
            <img src="' . $projectImage2 . '" alt="">
            <div class="content">
                <h3>' . $projectTitle2 . '</h3>
                <p>' . $projectDescription2 . '</p>
            </div>
        </div>

        <div class="box">
            <img src="' . $projectImage3 . '" alt="">
            <div class="content">
                <h3>' . $projectTitle3 . '</h3>
                <p>' . $projectDescription3 . '</p>
            </div>
        </div>

        <div class="box">
            <img src="' . $projectImage4 . '" alt="">
            <div class="content">
                <h3>' . $projectTitle4 . '</h3>
                <p>' . $projectDescription4 . '</p>
            </div>
        </div>

        <div class="box">
            <img src="' . $projectImage5 . '" alt="">
            <div class="content">
                <h3>' . $projectTitle5 . '</h3>
                <p>' . $projectDescription5 . '</p>
            </div>
        </div>

        <div class="box">
            <img src="' . $projectImage6 . '" alt="">
            <div class="content">
                <h3>' . $projectTitle6 . '</h3>
                <p>' . $projectDescription6 . '</p>
            </div>
        </div>

        <div class="box">
            <img src="' . $projectImage7 . '" alt="">
            <div class="content">
                <h3>' . $projectTitle7 . '</h3>
                <p>' . $projectDescription7 . '</p>
            </div>
        </div>

        <div class="box">
            <img src="' . $projectImage8 . '" alt="">
            <div class="content">
                <h3>' . $projectTitle8 . '</h3>
                <p>' . $projectDescription8 . '</p>
            </div>
        </div>


    </div>
    
</section>

<!-- portfolio section ends -->

</body>
</html>';

fwrite($myfile, $txt);
fclose($myfile);


$myfile = fopen("userFiles/main.css", "w") or die("Unable to open file!");
$txt = "* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    text-decoration: none;
    outline: none;
    border: none;
    text-transform: capitalize;
  }
  
  html {
    font-size: 62.5%;
    overflow-x: hidden;
  }
  
  html::-webkit-scrollbar {
    width: 1rem;
  }
  
  html::-webkit-scrollbar-track {
    background: #0d0d0d;
  }
  
  html::-webkit-scrollbar-thumb {
    background: crimson;
    border-radius: 5rem;
  }
  
  body {
    background: #0d0d0d;
    padding-bottom: 6.5rem;
  }
  
  section {
    padding: 5rem 9%;
  }
  
  .heading {
    text-align: center;
    font-size: 6vw;
    color: #fff;
    margin-bottom: 3rem;
    text-transform: uppercase;
  }
  
  .heading span {
    text-transform: uppercase;
    color: crimson;
  }
  
  .navbar {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    display: flex;
    z-index: 1000;
    -webkit-box-align: end;
        -ms-flex-align: end;
            align-items: flex-end;
  }
  
  .navbar a {
    padding: 2rem;
    font-size: 2rem;
    background: #1a1a1a;
    -webkit-box-flex: 1;
        -ms-flex: 1;
            flex: 1;
    color: #fff;
    text-align: center;
    -webkit-transition: .2s linear;
    transition: .2s linear;
  }
  
  .navbar a:hover {
    background: crimson;
    padding-bottom: 6rem;
  }
  
  .navbar a:hover i {
    color: #fff;
  }
  
  .home {
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    min-height: calc(100vh - 6.5rem);
  }
  
  .home .image {
    -webkit-box-flex: 1;
        -ms-flex: 1 1 42rem;
            flex: 1 1 42rem;
  }
  
  .home .image img {
    height: 50rem;
    width: 50rem;
    border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
  }
  
  .home .content {
    -webkit-box-flex: 1;
        -ms-flex: 1 1 42rem;
            flex: 1 1 42rem;
  }
  
  .home .content h3 {
    color: #fff;
    font-size: 4rem;
    padding-bottom: .5rem;
  }
  
  .home .content span {
    font-size: 3rem;
    color: crimson;
  }
  
  .home .content p {
    font-size: 1.5rem;
    color: #aaa;
  }
  
  .about .row .info-container {
    -webkit-box-flex: 1;
        -ms-flex: 1 1 42rem;
            flex: 1 1 42rem;
  }
  
  .about .row .info-container h1 {
    font-size: 3rem;
    color: #fff;
    text-transform: uppercase;
    padding-bottom: 1rem;
  }
  
  .about .row .info-container .box-container {
    padding: 1rem 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    gap: 2rem;
  }
  
  .about .row .info-container .box-container .box {
    -webkit-box-flex: 1;
        -ms-flex: 1 1 20rem;
            flex: 1 1 20rem;
  }
  
  .about .row .info-container .box-container .box h3 {
    font-size: 1.7rem;
    color: #fff;
    padding: 1rem 0;
    font-weight: normal;
  }
  
  .about .row .info-container .box-container .box h3 span {
    color: #aaa;
    font-weight: lighter;
  }
  
  .about .row .count-container {
    -webkit-box-flex: 1;
        -ms-flex: 1 1 42rem;
            flex: 1 1 42rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    gap: 2rem;
  }
  
  .about .row .count-container .box {
    -webkit-box-flex: 1;
        -ms-flex: 1 1 20rem;
            flex: 1 1 20rem;
    padding: 3rem 4rem;
    border-radius: .5rem;
    background: #1a1a1a;
    -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.7);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.7);
  }
  
  .about .row .count-container .box h3 {
    font-size: 5rem;
    color: crimson;
  }
  
  .about .row .count-container .box p {
    font-size: 2rem;
    color: #aaa;
  }
  
  .skills .box-container {
    display: -ms-grid;
    display: grid;
    -ms-grid-columns: (minmax(16rem, 1fr))[auto-fit];
        grid-template-columns: repeat(auto-fit, minmax(16rem, 1fr));
    gap: 1.5rem;
  }
  
  .skills .box-container .box {
    padding: 2rem;
    text-align: center;
    -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.7);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.7);
    border-radius: .5rem;
    background: #1a1a1a;
  }
  
  .skills .box-container .box:hover {
    background: #fff;
  }
  
  .skills .box-container .box:hover h3 {
    color: #0d0d0d;
  }
  
  .skills .box-container .box img {
    height: 7rem;
    margin-bottom: 1rem;
  }
  
  .skills .box-container .box h3 {
    color: #fff;
    font-size: 1.7rem;
    font-weight: normal;
    text-transform: uppercase;
  }
  
  .education .box-container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
  }
  
  .education .box-container .box {
    -webkit-box-flex: 1;
        -ms-flex: 1 1 40rem;
            flex: 1 1 40rem;
    margin-left: 2rem;
    padding-top: 0;
    padding-bottom: 0;
    padding-left: 3.5rem;
    padding-bottom: 3rem;
    border-left: 0.1rem solid #aaa;
    position: relative;
  }
  
  .education .box-container .box i {
    height: 4.5rem;
    width: 4.5rem;
    line-height: 4.5rem;
    font-size: 1.7rem;
    border-radius: 50%;
    background: crimson;
    color: #fff;
    text-align: center;
    position: absolute;
    top: -1rem;
    left: -2.5rem;
  }
  
  .education .box-container .box span {
    font-size: 1.7rem;
    color: #fff;
    border-radius: 5rem;
    padding: .5rem 1.5rem;
    background: #1a1a1a;
  }
  
  .education .box-container .box h3 {
    font-size: 2rem;
    padding: 1rem 0;
    color: #fff;
    padding-top: 3rem;
    font-weight: normal;
  }
  
  .education .box-container .box p {
    font-size: 1.5rem;
    color: #aaa;
    line-height: 2;
  }
  
  .portfolio {
    text-align: center;
  }
  
  .portfolio .box-container {
    display: -ms-grid;
    display: grid;
    -ms-grid-columns: (minmax(31rem, 1fr))[auto-fit];
        grid-template-columns: repeat(auto-fit, minmax(31rem, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
  }
  
  .portfolio .box-container .box {
    height: 30rem;
    overflow: hidden;
    position: relative;
  }
  
  .portfolio .box-container .box:hover .content {
    -webkit-transform: translateY(0%);
            transform: translateY(0%);
  }
  
  .portfolio .box-container .box img {
    height: 100%;
    width: 100%;
    -o-object-fit: cover;
       object-fit: cover;
  }
  
  .portfolio .box-container .box .content {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: #1a1a1a;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-flow: column;
            flex-flow: column;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    padding: 2rem;
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
    -webkit-transition: .2s linear;
    transition: .2s linear;
  }
  
  .portfolio .box-container .box .content h3 {
    font-size: 2.5rem;
    color: #fff;
    text-transform: uppercase;
    font-weight: normal;
  }
  
  .portfolio .box-container .box .content p {
    padding: 1rem 0;
    font-size: 1.5rem;
    line-height: 2;
    color: #aaa;
  }
  
  .portfolio .box-container .box .content a {
    font-size: 2rem;
    color: crimson;
  }
  
  .portfolio .box-container .box .content a:hover {
    color: #fff;
  }";

fwrite($myfile, $txt);
fclose($myfile);

redirect('/specialDownload.html');
?>