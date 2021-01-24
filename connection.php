<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "updeshkumarinfo";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
echo "";
}
else
{
	die("connection failed ".mysqli_connect_error());
}


?>