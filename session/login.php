<?php
// error_reporting(E_ALL); 
// ini_set("error_reporting", E_ALL);
	
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	if (isset($_POST['submit'])) 
	{
		if (empty($_POST['email']) || empty($_POST['password'])) {
			// die('12');
			echo $error = "email or Password is invalid";
			header("Location: index.php");
		}
		else
		{
			// die('123');
			// Define $username and $password
			$email=$_POST['email'];
			$password=$_POST['password'];

			$_SESSION["login_user"] = $email;
			header("Location: profile.php"); // Redirecting To Other Page
		}
	}else{
		
	header("Location: index.php");
	}
	// die('1234');
?>