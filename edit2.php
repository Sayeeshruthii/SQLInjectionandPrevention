<?php
include 'adminconnect.php';
include ('navbar.html');

    $idid = mysqli_real_escape_string($con,$_GET['id']);
    $sql = "SELECT * FROM tbl_user WHERE `user_id` = '?'";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        echo "SQL statement failed";
    }
    else
    {
        mysqli_stmt_bind_param($stmt,"",$uname, $pass);
        mysqli_stmt_execute($stmt);
    }

    $query=mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
    <body>
        <center>
            <h1>Edit Admin Information</h1>
        <form action="" method="get">
            <table>
                <tr>
                    <th>Name: </th>
                    <td><input type="text" name="name" value="<?php echo $name = $row['user_uname']; ?>"></td>
                </tr>
                <br>
                <tr>
                    <th>Password: </th>
                    <td><input type="text" name="password" value="<?php echo $password = $row['user_password']; ?>"></td>
                </tr>
                <br>
                <tr>
                    <th>Bank Acc: </th>
                    <td><input type="number" name="bankacc" value="<?php echo $bankacc = $row['user_bankaccount']; ?>"></td>
                </tr>
                <tr>
                    <center><td><button type="submit" name="update">Update</button></td></center>
                </tr>
            </table>
        </form>
        </center>
    </body>
</html>