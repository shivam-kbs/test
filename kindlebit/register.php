
<?php include 'connection.php';
if(isset($_POST['username']))
{
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
}

?>

<?php include('header.php'); ?>

	<div class="container">
		<div style="width: 500px; margin:0 auto; ">
			<h1 align="center">SIGNUP</h1>
			<hr/>
			<form action="" method="post">
				<div class="form-group">
					<label>username</label>
					<input type="text" name="username" id="username" class="form-control" placeholder="username">
				</div>

				<div class="form-group">	
					<label>email</label>
					<input type="text" name="email" id="email" class="form-control" placeholder="email">
				</div>

				<div class="form-group">	
					<label>password</label>
					<input type="password" name="userpassword" id="userpassword" class="form-control" placeholder="password">
				</div>

				<div class="form-group">	
					<label>phonenumber</label>
					<input type="number" name="phonenumber" id="phonenumber" class="form-control" placeholder="phone number">
				</div>


				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="submit" name="submit" id="submit">
					<input type="reset" class="btn btn-danger" value="reset" name="reset" id="reset">
				</div>
				<hr/>

				

				
			</form>
		</div>
	</div>





</body>
</html>
