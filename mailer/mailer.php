<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
class Mailer 
{	
	private $username, $password, $host, $port;
	public function __construct() {
		$this->username = 'test.securekbs@gmail.com';
		$this->password = 'secret@123#';
		$this->host     = 'smtp.gmail.com';
		$this->port     = 587;
	}
    /**
      * @param $from - assoc array ["email" => $email, "name" => $name]
      * @param $to - 1 or more valid email addresses
      * @param $subject - subject of email
      * @param $body - email body
      * @param attachments - array where [0] = location of file, [1] = name of file
      *
      * @return true if all emails to $to have been sent, else false
      */
    function sendmail($from,$to,$subject,$body)
    {
    	 
    try
   	{	
      	
   		$mail = new PHPMailer();
 
        $mail->IsSMTP();
                         // enable SMTP authentication
        $mail->Host       = $this->host;
        $mail->SMTPAuth   = true;          // set the SMTP server
                        // set the SMTP port
        $mail->Username   = $this->username;
        // SMTP account username
        $mail->Password   = $this->password;
        $mail->SMTPSecure= 'tls';
        $mail->Port       = $this->port;
        $mail->setFrom($this->username);
       
        $mail->addAddress($to);
        // echo $to;
   
        $mail->isHTML(true);
        $mail->Subject =$subject;
        $mail->Body = $body;
         // echo $body;
        $mail->send();
                           // telling the to us
        echo 'Message has been sent';
	}
		 catch (Exception $e)
		  {
			echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
			}
    }
}
