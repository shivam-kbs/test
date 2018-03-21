<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    
    $roll_no     = $_POST["roll_no"];
    $name        = $_POST["name"];
    $father_name = $_POST["father_name"];
    $class       = $_POST["class"];
    $state       = $_POST["state"];
    $city        = $_POST["city"];
    $gender      = $_POST["gender"];
    
    
    
    $sql = "INSERT INTO student_info (roll_no, name, father_name, class, state, city, gender)

        VALUES ( $roll_no, '$name', '$father_name', '$class', '$state', '$city', '$gender')";
    
    
    
    if ($connection->query($sql)) {
        
        echo "successfully inserted";
    }
    
    else {
        die("error ");
    }
    
    $connection->close();
}



if (isset($_POST['view'])) {
    $sql = "SELECT * FROM student_info";
    
    $result = $connection->query($sql);

    
    while ($row = mysqli_fetch_array($result)) 
    {

	    echo "<pre>";
	    echo $row['student_id'];
	    echo "</pre>";
		 echo "<pre>";	   
	    echo $row['roll_no'];
	    echo "</pre>";

	        
    }
    
}

?>





