<?php
include("connection.php");
error_reporting(0);
$_GET["rn"];
$_GET["sn"];
$_GET["cl"];
?>

<html>
<head>
<body>
<form action="" method="GET">
Rollno <input type="text" name="rollno" value="<?php echo $_GET["rn"];?>"/><br>
Name <input type="text" name="studentname" value="<?php echo $_GET["sn"];?>"/><br>
Class <input type="text" name="class" value="<?php echo $_GET["cl"];?>"/><br>
<input type="submit" name="submit" value="Update"/><br>


<?php
if($_GET['submit'])
{
	$rollno = $_GET['rollno'];
	$name = $_GET['studentname'];
	$class = $_GET['class'];
	$query = "UPDATE student SET NAME='$name' , CLASS='$class' WHERE ROLLNO='$rollno'";
	$data = mysqli_query($conn, $query);
	if($data)
	{ 
		echo "<font color='green'>data update successfully<a href='display.php'>check update list here</a>";
	}
	else
	{
		echo "<font color='red'>data update not successfully";
	}
}
else
{
echo "<font color='blue'>click on update button to save changes";
}
?>

</form>
</body>
</head>
</html>