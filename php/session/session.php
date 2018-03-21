<?php
session_start();  // Starting Session

		$myemail = "abc@gmail.com";
		$mypassword = "12345";

if(isset($_POST['submit'])) 
 {
	$email = $_POST['email'];
	$password = $_POST['password'];
		if ($myemail==$email && $mypassword==$password) {

			echo  "wellcome";
			//header('Location: index.html');
         }
		
 
		else {
			echo  "enter your email or password is invailid <br> click here on <a href = 'session.html'> tryagain </a>";
			//header('Location: session.html');
		}
 }
?>
