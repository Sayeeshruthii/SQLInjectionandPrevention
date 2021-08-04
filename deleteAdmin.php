<?php
include 'adminconnect.php';

$user_id=$_GET['id'];

  $sql = "DELETE FROM `tbl_user` WHERE user_id='$user_id'";
	$query=mysqli_query($con, $sql);

	if($query)
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Delete Succesfully!.')
    window.location.href='adminlist.php' </SCRIPT>");
  }
  else
  {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Cannot delete!.')
    window.location.href='adminlist.php' </SCRIPT>");
  }
?>
