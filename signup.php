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
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="#">Night Life Bristol</a></h1>
					
					</header>
					</header>


			<!--Sign-up page area-->		
			<article id="main">
						<header>
							<h2>Sign-Up</h2>
							<p>Please Sign-up to use the Application.</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">
							<section>
									<h4>Sign-Up</h4>
									<form method="post" action="signup.php">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="fullname" id="demo-name" value="" placeholder="Fullname" />
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="text" name="username" id="demo-name" value="" placeholder="Username" />
											</div>
											<div class="6u 12u$(xsmall)">
												<input type="password" name="password" id="demo-name" placeholder="Password" />
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="password" name="checkpassword" id="demo-name" placeholder="Check-Password" />
											</div>
											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" name="submit" value="Sign-up" class="special" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>
								</div>
								</section>
					</article>			

				<!-- Footer -->
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
			<script src="assets/js/app.js"></script>

	</body>
</html>


<?php

//form for the data
//checking the variable is set or not
if(isset($_POST['submit'])){
$submit = $_POST['submit'];
} else {
	$submit = "";
}

//checking the variable is set or not
if(isset($_POST['fullname'])){
$fullname = strip_tags($_POST['fullname']);
} else {
	$fullname ="";
}
//checking the variable is set or not
if(isset($_POST['username'])){
$username = strtolower(strip_tags($_POST['username']));
} else{
	$username ="";
}

//checking the variable is set or not
if(isset($_POST['password']) ){
$password = strip_tags($_POST['password']);
} else {
	$password = "";
}

//checking the variable is set or not
if(isset($_POST['checkpassword'])) {
$checkpassword = strip_tags($_POST['checkpassword']);
} else {
	$checkpassword = "";
}

$date = date("Y-m-d");

if ($submit)
	{
		//open database
			$connect = mysql_connect("mysql5","fet13021410","H338GSbh");
			mysql_select_db("fet13021410"); //selecting the database
			
			//prevents from having same usernames
			$checkusername = mysql_query("SELECT username FROM people WHERE username='$username'");
			//function to check the records count
			$count = mysql_num_rows($checkusername);
			
			if ($count!=0)
			{
			die ('<script>javascript: alert("Username already exist! Please chose again");</script>');	
				
			}
			
						
	//check for existence
	if ($fullname&&$username&&$password&&$checkpassword)	
		{
		
			//checking to see if the password and retyped password matches or not
			if ($password==$checkpassword)
			{
			
			//checks the length of the characters for fullname and username		
			if (strlen($username)>25||strlen($fullname)>25)
				{
				echo '<script>javascript: alert("The length for the username or password is too long!";);</script>';
				}
				else
					{
					//checking length of the password
					if (strlen($password)>25||strlen($password)<6)
					{
						echo '<script>javascript:alert("Password must be between 6 and 25 characters";);</script>';
					}
					else
						{
					
						
						//it encrypts the password
						$password = md5($password);
						$checkpassword = md5($checkpassword);
			
		
						//registering the queries
						$queryreg = mysql_query("
						
						INSERT INTO people VALUES ('','$fullname','$username','$password','$date')
						");
						
						Header("index.php");
						
						}
					}
			
			}
			else
				echo '<script>javascript:alert(" Password does not match!");</script>';
		}
		else
			echo '<script>javascript:alert("Please fill in all fields!");</script>';
	}			
?>