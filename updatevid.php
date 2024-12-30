
<?php
include("include/connect.php");
$id=$_REQUEST['id'];
$aname=$_REQUEST['name'];
$name=$_FILES['video']['name'];
$type=$_FILES['video']['type'];
$tmp_name=$_FILES['video']['tmp_name'];
$error=$_FILES['video']['error'];
$size=$_FILES['video']['size'];

if ($error>0) {
echo "error in your file pls check";
}else{
	$video="assets/upload/".$name;
	move_uploaded_file($tmp_name, $video);

	$sen="update adminv set name = '$aname' ,video ='$video' where id = '$id'";

	mysqli_query($conn,$sen);

	if (mysqli_affected_rows($conn)>0) {
        header("location:http://localhost/project/admin.php?update");
	}else{
        header("location:http://localhost/project/admin.php?error");
	}





}

?>
