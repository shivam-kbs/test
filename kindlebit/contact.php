

<?php include 'connection.php'; 

$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$phone_number=$_POST["phone_number"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$massage=$_POST["massage"];



$sql = "INSERT INTO contact_us (name,email,password,phone_number,dob,gender,massage)
 VALUES ( '$name','$email', '$password', $phone_number, '$dob','$gender','$massage')";



 if($connection ->query($sql))
 {

$message = "Thank you for contacting us – we will get back to you soon!";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo'<script>window.location="index.php";</script>';
}

else
 {
 	die("error inn insertion".$connection_error);
 }

 $connection->close();


?>





