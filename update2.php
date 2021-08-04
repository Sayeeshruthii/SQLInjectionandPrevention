<?php
    include('db_connect.php');
    include('navbar.html');
	$sql = "SELECT * FROM members WHERE id = '{$_GET['id']}'";
	$result = mysqli_query($connect,$sql) or die(mysqli_error());
	$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<body>
<div class="container" style="margin-top:100px">
    <div style="margin-left:10%;padding:1px 16px;height:auto;">
      <br><br>
            <section style="margin: 5px;">

                    <fieldset style="min-height:100px;">
                    <legend><b> Submit Feedback </b> </legend>
                    <p><i>Hey Please complete the feedback, It will help us to serve you better.</i></p>
                    <form action="update.php" name= "update" method="post">
                        <br>
                    <table>
                    <!-- <tr>
                            <td> ID :
                        </td>
                        <td>&nbsp;&nbsp;&nbsp;<input type="text" name="id" id="id" value="<?php echo $id = $row['id']; ?>">
                        </td>
                        </tr> -->
                        <tr>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td> First Name :
                        </td>
                        <td>&nbsp;&nbsp;&nbsp;<input type="text" name="fname" id="fname"  value="<?php echo $fname = $row['fname']; ?>">
                        </td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td>  Last Name : </td>
                            <td>&nbsp;&nbsp;&nbsp;<input type="text" name="lname" id="lname"  value="<?php echo $lname = $row['lname']; ?>">
                        </td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td>Age : </td>
                            <td>&nbsp;&nbsp;&nbsp;<input type="text" name="age" id="age" value="<?php echo $age = $row['age']; ?>">
                        </td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td> Contact : </td>
                            <td>&nbsp;&nbsp;&nbsp;<input type="text" name="contact" id="contact"  value="<?php echo $contact = $row['contact']; ?>">
                        </td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                    </table>
                </fieldset>
                    <br>
                    <input type="submit" name="update" value="SUBMIT" > 
                    <input type="reset" value="CLEAR">
                </form>    
    </div> 
</div>

</body>
</html>