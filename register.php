<html>
<?php
include('adminconnect.php');

if(isset($_GET['submit'])) {
	$adname = $_GET['admin_name'];
	$adpass = $_GET['admin_pass'];
  $adbank = "";
  $adbank = $_GET['admin_bank'];

	if($adname && $adpass)
	{
    $hashedPassword = password_hash($_GET['admin_pass'], PASSWORD_DEFAULT);


		$query = "INSERT INTO tbl_user(user_uname, user_password, user_bankaccount)
				  VALUES('$adname','$hashedPassword','$adbank')";
		$exec = mysqli_query($con,$query);
    if($exec)
    {
      echo ("<SCRIPT LANGUAGE='JavaScript'>
  		window.alert('New Admin Successfully Registered.')
  		</SCRIPT>");
      header('Location: adminlist.php');
      exit;
    }
	}
	else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Incomplete form, please fill in the form.')
		</SCRIPT>");
	}
}
?>
<head>
  <title>ADMIN</title>
	<style>
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

		/* Style the search box inside the navigation bar */
		.topnav input[type=text] {
		  float: right;
		  padding: 6px;
		  border: none;
		  margin-top: 8px;
		  margin-right: 16px;
		  font-size: 17px;
		}

		/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
		@media screen and (max-width: 600px) {
		  .topnav a, .topnav input[type=text] {
		    float: none;
		    display: block;
		    text-align: left;
		    width: 100%;
		    margin: 0;
		    padding: 14px;
		  }
		  .topnav input[type=text] {
		    border: 1px solid #ccc;
		  }
		}
	</style>
</head>
<body>
<div id="main">
  <div class="topnav">
    <a href="adminlist.php">List of Admin</a>
	<a class="active" href="register.php">Register New Admin</a>
	<a href="display.php">List of Users</a>
    <a href="logout.php">Logout</a>

    <form action="" method="get">
  	<input type="text" name="name" placeholder="Search Name..">
  	<input type="hidden" name="submit" >
    </form>
  </div>
<form method="get">
	<center>
	<h1>ADMIN REGISTERATION</h1>
	<a>Admin Username :</a><br>
	<input type="text" name="admin_name"><br><br>
	<a>Admin Password :</a><br>
	<input type="password" name="admin_pass"><br><br>
  <a>Admin Bank Account :</a><br>
	<input type="number" name="admin_bank"><br><br>

	<input type="submit" name="submit" value="ADD ADMIN">
	</center>
</form>
  </div>
</body>
</html>
