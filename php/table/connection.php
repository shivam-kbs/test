<?php 

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "sharma";

		//create connection
	$connection = new mysqli($servername,$username,$password,$dbname);
	
	
		// check connection
	if ($connection->connect_error) 

	{
     
       die("Connection failed: " . $connection->connect_error);
	}

?>












 