
<?php include 'connection.php';
session_start();

$username=$_POST["username"];
$email=$_POST["email"];
$userpassword=$_POST["userpassword"];
$phonenumber=$_POST["phonenumber"]; 

$sql = "INSERT INTO register (username,email,userpassword,phonenumber)
 VALUES ( '$username','$email', '$userpassword', $phonenumber)";

 $insert = $connection->query($sql);

 if($insert) {
	$message = "Register successfully. Please login.";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo'<script>window.location="login.php";</script>';
} else {
 	die("error inn insertion".$connection_error);
 }

 $connection->close();

?>
