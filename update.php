
<?php
include("include/connect.php");
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$contact =$_REQUEST['contact'];
$product =$_REQUEST['product'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

$update = "update register set name = '$name',contact = '$contact',product = '$product',email ='$email',message='$message' where id ='$id'";
mysqli_query($conn,$update);

if(mysqli_affected_rows($conn)>0){
    header("location:http://localhost/project/admin.php?update");
}

?>
