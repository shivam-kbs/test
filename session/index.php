<?php
    session_start(); 
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>sessions</title>
</head>
<body>
	<table cellpadding="5" cellpadding="10" align="center">
		<h1 align="center">login form using session and cookies</h1>
		<form name="myform" method="post" action="login.php">
			<tr>
				<th>EMAIL</th>
				<td><input type="text" name="email" id="email" placeholder="EMAIL"> </td>
			</tr>

			<tr>	
				<th>PASSWORD</th>
				<td><input type="password" name="password" id="password" placeholder="password"> </td>
			</tr>

			<tr>
				<td colspan="2" align="center"><input type="checkbox" name="remember" value="1">REMEMBER ME </td>
			</tr>

			<tr>
				<td colspan="2" align="right"><input type="submit" name="submit" value="login"> </td>
			</tr>
		</form>	
    </table>
</body>
</html>