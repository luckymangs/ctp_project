<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Creative Project</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- it is the page wrapper -->
			<div id="page-wrapper">

					<header id="header" class="alt">
						<h1><a href="#">Night Life Bristol</a></h1>
					
					</header>

				<!-- animation for the banner -->
					<section id="banner">
						<div class="inner">
							<h2>Night Life Bristol</h2>
							<p>The way around Bristol's<br />
							Clubs, Bars & Pubs<br />
							</p>
						</div>
						<a href="#one" class="more scrolly">More</a>
					</section>

				<!-- -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2>Bristol<br />
								The night life for you</h2>
								<section class="wrapper style5">
							<div class="inner">
							<section>
									<h4>Login</h4>
									<form method="POST" action="index.php">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="username" id="demo-name" value="" placeholder="Username" />
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="password" name="password" id="demo-email" value="" placeholder="Password" />
											</div>
											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="Login" class="special" /></li>
													<li><a href="signup.php">Sign-up</a></li>
												</ul>
											</div>
										</div>
									</form>
								</section>
								</div>
								</section>
							</header>
							
						</div>
					</section>				

				<!--  -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
		

	</body>
</html>


<?php

//Session to start
session_start();

//checking the variable is set or not
if(isset($_POST['username'])){
$username = $_POST['username'];
} else {
	$username = "";
}
//Checking the variable is set or not. If it is isn't it sets it
if(isset($_POST['password'])){
$password = $_POST['password'];
} else {
	$password ="";
}
// if the username is valid true then it execute the statement. 
//checking for validation
if($username&&$password)
	{

$connect = mysql_connect("mysql5","fet13021410","H338GSbh") or die("Could not connect!");
mysql_select_db("fet13021410") or die("Could not find the database");

//selecting the data 
$query = mysql_query("SELECT * FROM people WHERE username='$username'"); 

//counts the number of rows that have been retrieved from the query given in the database
$numrows = mysql_num_rows($query);

if ($numrows!=0)
{
	//code to login. Password check
	while ($row = mysql_fetch_assoc($query))
	{
		//extracting the username for the database
		$dbusername = $row['username'];
		$dbpassword = $row['password'];
	}
	
	//Checking to see if the username and password match with encrypted
	if ($username==$dbusername&&md5($password)==$dbpassword)
	{
		//redirect to index.php
		Header("Location: content.php");
		
	}
	else
		echo '<script>javascript:alert("Incorrect Password! Please check your username and password is correct.");</script>';
	
}
else
	die ('<script>javascript: alert("The username does not exist!");</script>');

}	

//stops executing and passing the parameter message
else
		die ('<script>javascript: alert("Please enter username and password");</script>');

?>