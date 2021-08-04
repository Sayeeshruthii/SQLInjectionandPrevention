<?php

include('adminconnect.php');


	if (isset($_POST['submit'])) {
		$uname = mysqli_real_escape_string($con,$_POST['uname']);
		$pass = mysqli_real_escape_string($con,$_POST['pass']);

		$sql = "SELECT * FROM `tbl_user` WHERE `user_uname`=? AND `user_password`=?;";

		$stmt = mysqli_stmt_init($con);
		if(!mysqli_stmt_prepare($stmt, $sql))
		{
			echo "SQL statement failed";
		}
		else
		{
			mysqli_stmt_bind_param($stmt,"ss",$uname, $pass);
			mysqli_stmt_execute($stmt);
		}

		$sendsql = mysqli_stmt_get_result($stmt);
		$count = mysqli_num_rows($sendsql);

		if ($count > 0) {
			$_SESSION['adminid'] = $uname;

			echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Login Succesfully!.')
			</SCRIPT>");
			header('Location: adminlist.php');
			exit;
		} else {
			echo ("<SCRIPT LANGUAGE='JavaScript'>
      window.alert('Wrong email and password combination. Please re-enter.')

      </SCRIPT>");
      exit();
		}
	}

?>
