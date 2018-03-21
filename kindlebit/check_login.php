<?php 
include 'connection.php';

if (isset($_POST['login'])) { 

	$email = $_POST['email'];
	$userpassword = $_POST['userpassword'];
	$sql= "SELECT * FROM register WHERE email = '$email' AND userpassword = '$userpassword' ";
	$result = $connection->query($sql);
	
	if($result->num_rows > 0) {
		header("Location:userprofile.php");
	} else {
		$message = "invalid email or password.";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo'<script>window.location="login.php";</script>';
	}
}
