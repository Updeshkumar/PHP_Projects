<style>
td
{
	padding:10px;
}
</style>

<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM student";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
/* $result = mysqli_fetch_assoc($data); */
/* echo $result['Rollno']." ".$result['Name']." ".$result['Class']."</br>"; */



if($total!=0)
{
	?>
	<table>
	<tr>
	<th>Rollno</th>
	<th>Name</th>
	<th>Class</th>
	<th colspan="2">Operations</th>
	</tr>
	
	
	<?php
	
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
			<td>".$result['Rollno']."</td>
			<td>".$result['Name']."</td>
			<td>".$result['Class']."</td>
			<td><a href='update.php?rn=$result[Rollno]&sn=$result[Name]&cl=$result[Class]'>Edit</a></td>
			<td><a href='delete.php?rn=$result[Rollno]&sn=$result[Name]&cl=$result[Class]'>Delete</a></td>
		</tr>";
	}
}
else
{
	echo 'no record found';
}
?>
</table>