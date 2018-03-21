<?php include 'connection.php';


$sql = "INSERT INTO Persons (ID,NAME,ROLLNO,CITY,ADDRESS)
VALUES (3, 'Ram', 38, 'Ahmedabad', 'Gandhinagar')";
    

if($connection->query($sql))
{
	echo "successfully inserted";

}
else
{
	die("error inn insertion".$connection_error);
}


?>