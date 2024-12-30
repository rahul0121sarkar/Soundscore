<?php
include("include/connect.php");
$id = $_REQUEST['id'];
$del = "delete from adminv where id = '$id'";

mysqli_query($conn,$del);
if(mysqli_affected_rows($conn)>0){
    header("location:http://localhost/project/admin.php?delete");
}
else{
    header("location:http://localhost/project/admin.php?failed");

}
?>