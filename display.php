<?php
include('db_connect.php');
include('navbar.html');
	$sql="SELECT * FROM members";
	$sendsql=mysqli_query($connect,$sql);
	
	if(mysqli_num_rows($sendsql)>0){
		echo"<center><table border=1>";
			echo"<tr>";
			echo"<th>First Name</th>";
			echo"<th>Last Name</th>";
			echo"<th>Age</th>";
			echo"<th>Contact</th>";
			echo"</tr>";
	while($rows=mysqli_fetch_array($sendsql)){
		echo"<tr>";
			echo"<td>".$rows["fname"]."</td>";
			echo"<td>".$rows["lname"]."</td>";
			echo"<td>".$rows["age"]."</td>";
			echo"<td>".$rows["contact"]."</td>";
			echo"<td><a href=\"update2.php?id=$rows[id]\">Edit</a> | <a href=\"remove.php?id=$rows[id]\"
					onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		echo "</table></center>";
	}else
		echo"No Record";

?>
<html>