
<?php

include('adminconnect.php');


	if (isset($_GET['submit'])) {
		$uname = $_GET['uname'];
		$pass = $_GET['pass'];

		$sql = "SELECT * FROM `tbl_user` WHERE `user_uname`='$uname' AND `user_password`='$pass';";
		$sendsql = mysqli_query($con,$sql);
		$count = mysqli_num_rows($sendsql);
		$row = mysqli_fetch_array($sendsql, MYSQLI_BOTH);

		if ($count > 0) {
			$_SESSION['adminid'] = $uname;

			echo ("<SCRIPT LANGUAGE='JavaScript'>
      window.alert('Login Succesfully!.')
      </SCRIPT>");
			header('Location: adminlist.php?id='.$row['user_id']);
      exit;
		}
		else {
			echo ("<SCRIPT LANGUAGE='JavaScript'>
      window.alert('Wrong username and password combination. Please re-enter.')
      window.location.href='login.php'
      </SCRIPT>");
      exit();
		}
	}

?>
