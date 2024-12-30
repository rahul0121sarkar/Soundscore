<?php
include("include/connect.php");

$name = $_REQUEST['name'];
$contact =$_REQUEST['contact'];
$product =$_REQUEST['product'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

$sen = "insert into register(name,contact,product,email,message)values('$name','$contact','$product','$email','$message')";
mysqli_query($conn,$sen);

if(mysqli_affected_rows($conn)>0){
    header("location:http://localhost/project/register.php?success");
}

?>