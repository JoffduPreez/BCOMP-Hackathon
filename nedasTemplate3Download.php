<?php
require 'redirect.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$websiteName = $_POST['websiteName'];
$personalDescription = $_POST['personalDescription'];
$personImage = $_POST['personImage'];
$projectTitle1 = $_POST['projectTitle1'];
$projectDescription1 = $_POST['projectDescription1'];
$projectTitle2 = $_POST['projectTitle2'];
$projectDescription2 = $_POST['projectDescription2'];
$projectTitle3 = $_POST['projectTitle3'];
$projectDescription3 = $_POST['projectDescription3'];
$skill1 = $_POST['skill1'];
$skillDesc1 = $_POST['skillDesc1'];
$skill2 = $_POST['skill2'];
$skillDesc2 = $_POST['skillDesc2'];
$skill3 = $_POST['skill3'];
$skillDesc3 = $_POST['skillDesc3'];

$myfile = fopen("userFiles/index.html", "w") or die("Unable to open file!");
$txt = '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&family=Lato:wght@300&family=Open+Sans:ital,wght@0,400;1,300&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <!-- Intro Section-->
    <div class="hero" id="intro">
      <nav>
        <h2 class="logo">' . $websiteName . '</span></h2>
        <ul id="NavBar">
          <li id="NavBarItem"><a href="#about"> About Me</a></li>
          <li id="NavBarItem"><a href="#skills">Skills</a></li>
          <li id="NavBarItem"><a href="#projects">Projects</a></li>
          <li id="NavBarItem"><a href="#contact">Contact </a></li>
        </ul>
      </nav>
      <div class="content">
        <h4>Hello, My Name Is</h4>
        <h1>' . $firstName . $lastName . '</h1>
        <h3>I\'m An App Developer</h3>
      </div>
    </div>

    <!-- About Section -->
    <section class="About" id="about">
      <div class="main">
        <img
          src="' . $personImage . '"
          alt=""
        />
        <div class="AboutText">
          <h2>About Me</h2>
          <h5>I Am A App Developer</h5>
          <p>
            ' . $personalDescription . '
          </p>
        </div>
      </div>
    </section>

    <!-- My Skills -->

    <div class="skills" id="skills">
      <div class="Title">
        <h2 class="">My Skills</h2>
      </div>

      <div class="box">
        <div class="card">
          <i class="fas fa-bars"></i>
          <h5>' . $skill1 . '</h5>
          <div class="skillEx">
            <p>
                ' . $skillDesc1 . '
            </p>
          </div>
        </div>

        <div class="card">
          <i class="fas fa-users"></i>
          <h5>' . $skill2 . '</h5>
          <div class="skillEx">
            <p>
                ' . $skillDesc2 . '
            </p>
          </div>
        </div>

        <div class="card">
          <i class="fas fa-bell"></i>
          <h5>' . $skill3 . '</h5>
          <div class="skillEx">
            <p>
                ' . $skillDesc3 . '
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Projects Sections -->

    <section class="projects" id="projects">
        <h2 class="Title"> <br> Projects</h2>
      </div>
      <div class="box">
        <div class="card">
          <h5>
            <a href="https://www.google.ca" target="_blank">' . $projectTitle1 . ' </a>
          </h5>
          <p>
            ' . $projectDescription1 . '
          </p>
        </div>
        <div class="card">
          <h5>
            <a href="https://www.apple.ca" target="_blank">' . $projectTitle2 . '</a>
          </h5>
          <p>
            ' . $projectDescription2 . '
          </p>
        </div>
        <div class="card">
          <h5>
            <a href="https://www.google.ca" target="_blank">' . $projectTitle3 . '</a>
          </h5>
          <p>
            ' . $projectDescription3 . '
          </p>
        </div>
      </div>
    </section>

    <!-- Contact Me Section -->
    <div class="container" id="contact">

        <div class="contact-box">
          <div class="left"></div>
          <div class="right">
            <h2 id="contactH2">Contact Me</h2>
            <input type="text" class="field" placeholder="Your Name">
            <input type="email" class="field" placeholder="Your email">
            <input type="text" class="field" placeholder="Phone Number">
            <textarea class="field" placeholder="Message" ></textarea>
            <button class="btn"> Send </button>
          </div>
        </div>

    </div>
  </body>
</html>
';

fwrite($myfile, $txt);
fclose($myfile);


$myfile = fopen("userFiles/main.css", "w") or die("Unable to open file!");
$txt = '* {
    scroll-behavior: smooth;
    padding: 0px;
    margin: 0px;
    font-family: "Josefin Sans", sans-serif;
    box-sizing: border-box;
  }
  
  .hero {
    height: 100vh;
    width: 100%;
    background-image: url(/images/background3.gif);
    background-size: cover;
    background-position: center;
  }
  nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 45px;
    padding-left: 8%;
    padding-right: 8%;
  }
  .logo {
    color: white;
    font-size: 35px;
    font-family: "Lato", cursive;
    letter-spacing: 1px;
    cursor: pointer;
  }
  
  span {
    color: #950740;
    font-family: "Lato", sans-serif;
  }
  
  nav ul li {
    list-style-type: none;
    display: inline-block;
    padding: 10px 15px;
  }
  nav ul li a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    text-transform: capitalize;
  }
  
  nav ul li a:hover {
    color: #c3073f;
    transition: 0.4s;
  }
  
  #SampleImg {
    float: left;
    margin-top: 100px;
    width: 400px;
    border-radius: 50%;
    margin-left: 125px;
  }
  
  .content {
    position: absolute;
    top: 38%;
    left: 10%;
    align-items: center;
    justify-content: space-around;
    width: 1130px;
    max-width: 95%;
    /* margin: 50 auto; */
  }
  
  h1 {
    font-family: "Lato", sans-serif;
    color: #c3073f;
    margin: 10px 0px 10px;
    font-size: 75px;
    text-align: right;
  }
  
  h3 {
    font-family: "Open Sans", sans-serif;
    font-weight: bold;
    color: white;
    font-size: 25px;
    margin-bottom: 50px;
    text-align: right;
  }
  
  h4 {
    font-family: "Open Sans", sans-serif;
    color: white;
    letter-spacing: 2px;
    font-weight: bold;
    font-size: 25px;
    text-align: right;
  }
  
  .right {
    float: right;
    margin-left: 25px;
    transform: translateY(100px);
  }
  
  .About {
    width: 100%;
    padding: 100px 0px;
    background-color: #111111;
  }
  
  .About img {
    height: auto;
    width: 430px;
  }
  
  .AboutText {
    width: 500px;
  }
  
  .main {
    width: 1130px;
    max-width: 95%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-around;
  }
  
  .AboutText h2 {
    color: #c3073f;
    font-size: 75px;
    text-transform: capitalize;
    margin-bottom: 20px;
  }
  
  .AboutText h5 {
    color: #950740;
    letter-spacing: 2px;
    font-size: 25px;
    margin-bottom: 25px;
    text-transform: capitalize;
  }
  
  .AboutText p {
    color: #ffffff;
    letter-spacing: 1px;
    line-height: 28px;
    font-size: 18px;
    margin-bottom: 48px;
  }
  
  .skills {
    background: #950740;
    width: 100%;
    height: 100vh;
    padding: 100px 0px;
  }
  
  .Title h2 {
    color: white;
    font-size: 75px;
    width: 1130px;
    margin: 30px auto;
    text-transform: capitalize;
    text-align: center;
  }
  
  .box {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 400px;
  }
  .card {
    height: 365px;
    width: 335px;
    padding: 20px 35px;
    background: white;
    border-radius: 20px;
    margin: 15px;
    position: relative;
    overflow: hidden;
    text-align: center;
  }
  
  .card i {
    font-size: 50px;
    display: block;
    text-align: center;
    margin: 25px 0px;
    color: #c3073f;
  }
  
  h5 {
    color: #950740;
    font-size: 23px;
    margin-bottom: 15px;
  }
  
  .skillEx {
    color: black;
    font-size: 16px;
    line-height: 23px;
    margin-bottom: 25px;
  }
  
  .Title {
    color: #c3073f;
    font-size: 75px;
    width: 1130px;
    margin: 30px auto;
    margin-top: 0px;
    text-transform: capitalize;
    text-align: center;
  }
  
  .projects {
    background: black;
    width: 100%;
    height: 100vh;
  }
  
  .projects .card {
    background: white;
    margin: 25px;
  }
  
  .projects .card p {
    color: #950740;
    margin-top: 15%;
    font-size: 18px;
  }
  
  .projects .card h5 {
    margin-top: 8%;
    font-size: 30px;
  }
  
  .projects .card a {
    text-decoration: none;
    font-weight: bold;
    text-transform: capitalize;
  }
  
  .projects .card a:hover {
    font-size: 32px;
    color: #c3073f;
    transition: 0.4s;
  }
  
  .projects .card a,
  a:visited {
    color: black;
  }
  
  body .container {
    height: 100vh;
    width: 100%;
  }
  
  .container {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
    padding: 20px 100px;
  }
  
  .container:after {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    width: 100%;
    height: 100%;
    background: url(/images/adult_bad_beard_blue_background_cap_facial_expression_facial_hair_fashion-1537223.jpg!d)
      no-repeat center;
    background-size: cover;
    z-index: -1;
    filter: blur(50px);
  }
  
  .contact-box {
    max-width: 850px;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    justify-content: center;
    align-items: center;
    text-align: center;
    background-color: #ffffff;
    box-shadow: 0px 0px 19px 5px rgba(0, 0, 0, 0.19);
  }
  
  .left {
    height: 100%;
    background: url(/images/adult_bad_beard_blue_background_cap_facial_expression_facial_hair_fashion-1537223.jpg!d)
      no-repeat center;
    background-size: cover;
  }
  
  .right {
    height: 150%;
    padding: 25px 40px;
  }
  
  #contactH2 {
    position: relative;
    padding-bottom: 10px;
    margin-bottom: 10px;
  }
  
  #contactH2:before {
    content: "";
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 4px;
    width: 50px;
    border-radius: 2px;
    background-color: #5ab9ea;
  }
  
  .field {
    width: 100%;
    padding: 0.5rem 1rem;
    outline: none;
    border: 2px solid rgba(0, 0, 0, 0);
    background-color: rgba(260, 260, 260, 0.6);
    font-size: 1.1rem;
    margin-bottom: 22px;
    transition: 0.3s;
  }
  
  .field:hover {
    background-color: rgba(0, 0, 0, 0.1);
  }
  
  .field:focus {
    background-color: #fff;
    border: 2px solid rgba(30, 85, 250, 0.47);
  }
  
  .area {
    min-height: 150px;
  }
  
  .btn {
    width: 100%;
    padding: 0.5rem 1rem;
    font-size: 1.1rem;
    background-color: #5ab9ea;
    cursor: pointer;
    outline: none;
    border: none;
    color: #fff;
    transition: 0.3s;
  }
  
  .btn:hover {
    background-color: #5680e9;
  }
  
  @media screen and (max-width: 880px) {
    .contact-box {
      grid-template-columns: 1fr;
    }
    .left {
      height: 200px;
    }
  }';

fwrite($myfile, $txt);
fclose($myfile);

redirect('/download.html');

?>