<?php
include("include/connect.php");

// $name = $_REQUEST['name'];
// $contact =$_REQUEST['contact'];
// $product =$_REQUEST['product'];
// $email = $_REQUEST['email'];
// $message = $_REQUEST['message'];

// $sen = "insert into register(name,contact,product,email,message)values('$name','$contact','$product','$email','$message')";
// mysqli_query($conn,$sen);

// if(mysqli_affected_rows($conn)>0){
//     header("location:http://localhost/project/form.php?success");
// }


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

	$sen="insert into adminv(name,video)value('$aname','$video')";

	mysqli_query($conn,$sen);

	if (mysqli_affected_rows($conn)>0) {
        header("location:http://localhost/project/form.php?success");
	}else{
        header("location:http://localhost/project/form.php?error");
	}





}










?>