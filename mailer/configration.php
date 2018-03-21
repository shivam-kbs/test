<?php
if (isset($_POST['submit'])) 
{
	$to = $_POST['email'];
	 "</br>";
	 $from = $_POST['name'];
	 "</br>";
	 $subject = $_POST['sub'];
	 "</br>";
	 $body = $_POST['body'];
	 
	 "</br>";
	}
	include 'mailer.php';
$mailsend= new Mailer();	
$mailsend->sendmail($from,$to,$subject,$body);
?>



