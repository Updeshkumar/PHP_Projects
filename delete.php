<?php
include("connection.php");
error_reporting(0);
$rollno = $_GET["rn"];
$query = "DELETE FROM student WHERE ROLLNO='$rollno'";
$data = mysqli_query($conn, $query);
if($data)
{
	echo "data to be deleted";
}
else
{
	echo "data to be not deleted";
}

?>


