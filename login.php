<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Soundscore-Login</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/login.css">

</head>
<body>
<?php
    if (isset($_REQUEST['direct_access'])) {
        echo "<script>
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Incorrect Username or Password!!!',
            showConfirmButton: false,
            timer: 2500
        })
        </script>";

    }
    ?>


<?php
    if(isset($_REQUEST['logout'])){
       
        echo "<script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'logout Successfully!!!',
            showConfirmButton: false,
            timer: 1500
        })
        </script>";
                 
    }
    ?>


<div class="container" id="iu">

<form action="admin_insert.php" method="post">
    <h3 style="font-family:Montserrat,sans-serif";>Admin (<span style="color: #0088a9;" ><small>login</small></span>)</h3>

    <div class="row">

        <div class="col-md-12">
            <label for="username">username</label>
            <input type="text" name="username"  id="username" class="form-control">
        </div>

    </div>
    <div class="row">

        <div class="col-md-12">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
    </div>
    
    
     <br>   
    <button type="submit" class="reg"> Login </button>
    <button type="reset" class="regre">Reset</button>

</form>


</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>