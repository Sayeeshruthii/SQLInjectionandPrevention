<?php

include('adminconnect.php');


	if (isset($_POST['submit'])) {
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];

		$sql = "SELECT `user_password` FROM `tbl_user` WHERE `user_uname`='$uname';";
		$sendsql = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($sendsql, MYSQLI_BOTH);

		$hashedPassword = $row['user_password'];

		if (password_verify($_POST['pass'], $hashedPassword))
		{

			$_SESSION['adminid'] = $uname;

			echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Login Succesfully!.')
			</SCRIPT>");
			header('Location: adminlist.php');
			exit;

		}
		else
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Wrong username and password combination. Please re-enter.')
			window.location.href='login.php'
			</SCRIPT>");
			exit();
		}
	}

?>
