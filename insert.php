<?php
include("connection.php");
error_reporting(0);
?>

<html>
<head>
<body>
<form action="" method="GET">
Rollno <input type="text" name="rollno" value=""/><br>
Name <input type="text" name="studentname" value=""/><br>
Class <input type="text" name="class" value=""/><br>
<input type="submit" name="submit" value="Submit"/>


<?php
if($_GET['submit'])
{
	$rn = $_GET['rollno']."</br>";
	$sn = $_GET['studentname'];
	$cl = $_GET['class'];
	if($rn!=""&& $sn!=""&& $cl!="")
	{
		$query = "INSERT INTO student VALUES('$rn','$sn','$cl')";
		$ram = mysqli_query($conn,$query);
		if($query)
		{
			echo "insert data";
		}
	}
	else
	{
		echo "all feild required";
	}
}
?>

</form>
</body>
</head>
</html>