<?php
	require_once "class.php";
	$conn = new db_class();
	if(ISSET($_POST['register'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$number = $_POST['number'];
		$conn->save($name, $email, $password, $number);
		echo '<script>alert("Successfully saved!")</script>';
		echo '<script>window.location= "login.php"</script>';
	}	
?>