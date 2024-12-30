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
if (isset($_REQUEST['success'])) {
    echo "<script>
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    color:'primary',
                    title: 'we recieved your message!!!',
                    showConfirmButton: false,
                    timer: 1500
                })
                </script>";
}
?>



            <div class="container">
                <div class="sec">

             
                <div class="card-header">
                    <div class="card-header">Inquiry Form</div>
                    <div class="card-body">
                    <form action="form_insert.php" method="post" enctype="multipart/form-data">
            

           
            <div class="row">
    
                <div class="col-md-12">
                    <label for="name">Name</label>
                    <input type="text" name="name"  id="name" class="form-control" placeholder="Enter your name">
                </div>            
               
            </div>
    

            <div class="row">
            <div class="col-md-12">
                    <label for="video">Video LInk</label>
                    <input type="file" name="video" id="video" class="form-control">
                </div>
            </div>
            </div>

                    </div>

                <div class="card-footer">
                <button type="submit" class="reg">Submit</button>
               <button type="reset" class="regre">Reset</button>
               </form>
                </div>    
                </div>


            </div>

          
<script src="js/nav.js"></script>
</body>
</html>