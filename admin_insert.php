<?php
include("include/connect.php");
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];


$admin = "select * from admin where username = '$username' and password ='$password'";
$access = mysqli_query($conn, $admin);


if (mysqli_affected_rows($conn) > 0) {
    while ($key = mysqli_fetch_assoc($access)) {
        session_start();
        $_SESSION['username'] = $key['username'];
        $_SESSION['password'] = $key['password'];
    }
    header("location:http://localhost/project/admin.php");
}else
{
    header("location:http://localhost/project/login.php?direct_access");
}
?>