<?php

//this page prevents from data being lost once the page gets closed or not. is users are still logged in and have not logged out.	
	
session_start();

if ($_SESSION['username'])
	echo "Hello,".$_SESSION['username']."!<br><a href='logout.php'>Logout</a>";
else
		die("You must be logged in!");
	
?>