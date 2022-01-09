<?php
require 'redirect.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$occupation = $_POST['occupation'];
$email = $_POST['email'];
$personalDescription = $_POST['personalDescription'];
$projectTitle1 = $_POST['projectTitle1'];
$projectDescription1 = $_POST['projectDescription1'];
$projectTitle2 = $_POST['projectTitle2'];
$projectDescription2 = $_POST['projectDescription2'];
$projectTitle3 = $_POST['projectTitle3'];
$projectDescription3 = $_POST['projectDescription3'];

$myfile = fopen("userFiles/index.html", "w") or die("Unable to open file!");
$txt = '<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>Griffin template 1</title>
    <link rel= "stylesheet" href = "main.css"> <!--- Link style sheet im using--> 
</head>

    <div class = "navbar">
        <nav>
            <H2 class = "logo"> portfolio</H2>
            <ul>
                <li><a href = "#Home">Home</a></li>
                <li><a href = "#about">About</a></li>
                <li><a href = "#Projects">Projects</a></li>
                <li><a href = "#Contact">Contact me</a></li>
            </ul>
        </nav>
    </div>
<body>
		<div class="content">
			<h4>Hello, my name is</h4>
			<h1>' . $firstName . ' ' . $lastName . '</h1>
			<h3>I am a ' . $occupation . '.</h3>
		</div>
	</div>

	<!----About section start---->
	<section id = about>
		<div class="about">
			<div class="main">
				<img src="images/headshot.jpg">
				<div class="about-text">
					<h2>About Me</h2>
					<p>' . $personalDescription . '</p>
					<button type="button"><li><a href="mailto:">we can link your email here!</a></li></button>
				</div>
			</div>
		</div>
	</section>

	<!-----Project section start----------->
	<section id = Projects>
		<div class="Projects">
			<div class="title">
				<h2>My projects</h2>
			</div>

			<div class="box">
				<div class="card">
					<i class="info"></i>
					<h5>' . $projectTitle1 . '</h5>
					<div class="text">
						<p>' . $projectDescription1 . '</p>
					</div>
				</div>
				

				<div class="card">
					<i class="info"></i>
					<h5>' . $projectTitle2 . '</h5>
					<div class="text">
						<p>' . $projectDescription2 . '</p>
					</div>
				</div>D

				<div class="card">
					<i class="info"></i>
					<h5>' . $projectTitle3 . '</h5>
					<div class="text">
						<p>' . $projectDescription3 . '</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!------Contact Me------>
	<section id = "Contact">
		<div class="contact-me">
			<p>Let Me Be A part of your team.</p>
			<a class="button-two" href="mailto:">Email me!</a>
		</div>
	</section>';

fwrite($myfile, $txt);
fclose($myfile);


$myfile = fopen("userFiles/main.css", "w") or die("Unable to open file!");
$txt = "*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    box-sizing: border-box;
}
.navbar{
  height: 100vh;
  width: 100%;
  background-image: url('../images/background.gif');
  background-size: cover;
  background-position: center;
}

nav{
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding-top: 45px;
  padding-left: 8%;
  padding-right: 8%;
}

.logo{
  color: white;
  font-size: 35px;
  letter-spacing: 1px;
  cursor: pointer;
}

nav ul li{
  list-style-type: none;
  display: inline-block;
  padding: 10px 25px;
}

nav ul li a{
  color: white;
  text-decoration: none;
  font-weight: bold;
}

nav ul li a:hover{
	color: #f9004d;
	transition: .4s;
}
.btn{
	background-color:#f9004d;
	color: white;
	text-decoration: none;
	border: 2px solid transparent;
	font-weight: bold;
	padding: 10px 25px;
	border-radius: 30px;
	transition: transform .4s; 
}

.content{
	position: absolute;
	top: 50%;
	left:8%;
	transform: translateY(-50%);
}

h1{
	color: white;
	margin: 20px 0px 20px;
	font-size: 75px;
}
h3{
	color: white;
	font-size: 25px;
	margin-bottom: 50px;
}
h4{
	color: #fcfc;
	letter-spacing: 2px;
	font-size: 20px;
}

.about{
	width: 100%;
	padding: 100px 0px;
	background-color: #191919;
}
.about img{
	height: auto;
	width: 430px;
}
.about-text{
	width: 550px;
}
.main{
	width: 1130px;
	max-width: 95%;
	margin: 0 auto;
	display: flex;
	align-items: center;
	justify-content: space-around;
}
.about-text h2{
	color: white;
	font-size: 75px;
	text-transform: capitalize;
	margin-bottom: 20px;
}

.about-text p{
	color: #fcfc;
	letter-spacing: 1px;
	line-height: 28px;
	font-size: 18px;
	margin-bottom: 45px;
}
button{
	background-color:#f9004d;
	color: white;
	text-decoration: none;
	border: none;
	font-weight: bold;
	padding: 13px 30px;
	border-radius: 15px;
	transition: .4s; 
}
button:hover{
	background-color: transparent;
	border: 2px solid #f9004d;
	cursor: pointer;
}

.Projects{
	background: #101010;
	width: 100%;
	padding: 100px 0px;
}
.title h2{
	color: white;
	font-size: 75px;
	width: 1130px;
	margin: 30px auto;
	text-align: center;
}
.box{
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 400px;
}
.card{
	height: 365px;
	width: 335px;
	padding: 20px 35px;
	background: #191919;
	border-radius: 20px;
	margin: 15px;
	position: relative;
	overflow: hidden;
	text-align: center;
}
.card i{
	font-size: 50px;
	display: block;
	text-align: center;
	margin: 25px 0px;
	color: #f9004d;

}
h5{
	color: white;
	font-size: 23px;
	margin-bottom: 15px;
}
.text p{
	color: #fcfc;
	font-size: 16px;
	line-height: 27px;
	margin-bottom: 25px;
}

.contact-me{
	width: 100%;
	height: 290px;
	background: #191919;
	display: flex;
	align-items: center;
	flex-direction: column;
	justify-content: center;
}
.contact-me p{
	color: white;
	font-size: 30px;
	font-weight: bold;
	margin-bottom: 25px;
}
.contact-me .button-two{
	background-color:#f9004d;
	color: white;
	text-decoration: none;
	border: none;
	font-weight: bold;
	padding: 13px 30px;
	border-radius: 30px;
	transition: .4s; 
}
.contact-me .button-two:hover{
	background-color: transparent;
	border: 2px solid #f9004d;
	cursor: pointer;
}

button li a{
  text-decoration: none;
  color: white;
}";

fwrite($myfile, $txt);
fclose($myfile);

redirect('/download.html');
?>