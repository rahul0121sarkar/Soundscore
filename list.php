<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soundscore-Feel the music</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
</head>
<body>
<header>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="form.php">Inquiry From</a>
  <a href="list.php">Inquiry List</a>
  <a href="admin.php">Admin</a>
</div>

<!-- Use any element to open the sidenav -->
<span onclick="openNav()"> <img src="image/soe.png" alt="soundScore" class="logo"></span>

<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
    <h2>Admin</h2>
</div>
    <a href="logout.php"><button class="log">Logout</button></a>
    </header>
    <?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:http://localhost/project/login.php?direct_access");
    }
    
    ?>



<?php
if (isset($_REQUEST['delete'])) {
    echo "<script>
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    color:'#0088a9',
                    title: ' message was deleted!!!',
                    showConfirmButton: false,
                    timer: 1500
                })
                </script>";
}
?>

<?php
if (isset($_REQUEST['update'])) {
    echo "<script>
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    color:'#0088a9',
                    title: ' message was updated!!!',
                    showConfirmButton: false,
                    timer: 1500
                })
                </script>";
}
?>

<section class="partner">

    <div class="container">
        <div class="card-header">
            User Inquiry List
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Product</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
    
    
                <?php
                include("include/connect.php");
                $sel = "select * from register";
                $show = mysqli_query($conn,$sel);
                if(mysqli_affected_rows($conn)>0){
                    $sn =1;
                    while($key=mysqli_fetch_assoc($show)){
                ?>
                        <tr>
                            <td><?=$sn++;?></td>
                            <!-- <td><?=$key['id'];?></td> -->
                            <td><?=$key['name'];?></td>
                            <td><?=$key['contact'];?></td>
                            <td><?=$key['product'];?></td>
                            <td><?=$key['email'];?></td>
                            <td><?=$key['message'];?></td>
                            <td><a href="delete.php?id=<?=$key['id'];?>"><i class="fa-solid fa-trash del" style="color: #ad144a;"></i></a>
                           <a href="select.php?id=<?=$key['id'];?>"><i class="fa-solid fa-upload" style="color: #1b4793;"></i></a></td>
                        </tr>
                <?php        
                    }
                }
                ?>
            </table>
        </div>
    
    </div>
</section>



<script src="js/nav.js"></script>
</body>
</html>