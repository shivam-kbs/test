$error=''; // Variable To Store Error Message
	if (isset($_POST['submit'])) 
	{
		if (empty($_POST['email']) || empty($_POST['password'])) 
		{
		$error = "email or Password is invalid";
		}
		else
		{
			// Define $username and $password
					$email=$_POST['email'];
					$password=$_POST['password'];
			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			// $connection = mysql_connect("localhost", "root", "");
			// To protect MySQL injection for Security purpose
			$email = stripslashes($email);
			$password = stripslashes($password);
			// $username = mysql_real_escape_string($username);
			// $password = mysql_real_escape_string($password);
			// Selecting Database
			// $db = mysql_select_db("company", $connection);
			// SQL query to fetch information of registerd users and finds user match.
			// $query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
			// $rows = mysql_num_rows($query);
			// if ($rows == 1) {
			$_SESSION['login_user']=$email; // Initializing Session
			header("location: profile.php"); // Redirecting To Other Page
		}
		 else 
		 {
			$error = "email or Password is invalid";
		}