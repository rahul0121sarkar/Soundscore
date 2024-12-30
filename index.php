<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soundscore-Feel the music</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <a href="index.php"><img src="image/soe.png" alt="soundScore" class="logo">
</a>
        <nav class="nav_links">
            <li><a href="index.php">Home</a></li>
            <li><a href="#detailAbout">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
        </nav>

       <a href="login.php"> <button class="log">Login</button></a>
    </header>

<section>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="image/speaker2.webp" class="d-block w-100" alt="..."   height="600px" width="30px">
    </div>
    <div class="carousel-item">
      <img src="image/speaker4.webp" class="d-block w-100" alt="..." height="600px" width="600px" class="cur">
      
    </div>

    <div class="carousel-item">
      <img src="image/adminbackground.jpg" class="d-block w-100" alt="..." height="600px" width="600px" class="cur">
      
    </div>

    <div class="carousel-item">
      <img src="image/speaker5.webp" class="d-block w-100" alt="..." height="600px" width="600px" class="cur">
      
    </div>
    <div class="carousel-item">
      <img src="image/speaker5.webp" class="d-block w-100" alt="..." height="600px" width="200px">
     
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>



<section id="detailAbout">
    <div class="container">
        <div class="row">
            <div class="col-md-6 about_us">
                <h2>About <span style="color:#0088a9">us</span> </h2>
                <p><span style="color:#0088a9">Soundscore</span>  the leader in audio products presents affordable & high quality products! Shop Now. From workouts to adventures, <span style="color:#0088a9">Soundscore</span> will get you sailing. Affordable Price. Free Delivery. Free Shipping. Original <span style="color:#0088a9">Soundscore</span> Products. 7 Days Replacement. PAN India COD Available.</p>

                <a href="register.php"><button class="reg">Register</button></a>
            </div>

            <div class="col-md-6">
                <img src="image/hero.png" alt="" class="about_img">
            </div>
        </div>
    </div>
</section>






<section class="message">
  <div class="container">
    <div class="row">
    <?php
      include("include/connect.php");
      $sel = "select * from adminv ";
      $show = mysqli_query($conn,$sel);
      if(mysqli_affected_rows($conn)>0){
        while($key=mysqli_fetch_assoc($show)){
    ?>
          
            <div class="col-md-4">
                <div class="container-fluid cardvid">
                <video src="<?=$key['video'];?>" controls autoplay="autoplay" muted height="230" ></video>
                </div>  
            </div>
    <?php
        }
      }
    ?>
    <div class="container message_about">
        <h2>
        "Best in class bluetooth speaker in the market.Though <span style="color:#0088a9">Soundscore</span> has smooth round edges it is built with the cutting edge technology.""
        </h2>

    </div>
    </div>
  </div>
</section>


<section>
   <div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="image/details.jpg" alt="details" class="details_img">
        </div>
        <div class="col-md-6 details_h2">
            <h2>Features <span style="color:#0088a9">&</span> Specifications </h2>&nbsp;
            <ul>
                <li>Firstly, most elegat and <span style="color:#0088a9"> beautiful </span> design</li>
                <li><span style="color:#0088a9">36</span> Hours battery Backup</li>
                <li><span style="color:#0088a9">Bluetooth 4.0</span> Upto 20 Feet & Microphhone upto 10 feet</li>
                <li>Highly Durable Body and Strap</li>
                <li>Supports Siri, Cortana and <span style="color:#0088a9"> Google </span> Voice</li>
                <li>Android, Apple and Windows Compatible</li>
            </ul>
        </div>
    </div>
   </div>
</section>




<section class="partner">
    
    <div class="container">
    <h2 class="text-center">Music <span style="color:#0088a9">partner</span> </h2>
        <div class="brand">
            <div class="card">
                <img src="image/apple.png" alt="">
            </div>

            <div class="card">
                <img src="image/jio.png" alt="">
            </div>

            <div class="card">
                <img src="image/spotify.png" alt="">
            </div>

            <div class="card">
                <img src="image/amazon.png" alt="">
            </div>

            <div class="card">
                <img src="image/wynk.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="foot" id="contact">
 
    <div class="container">
        <footer class="footdet">
          <div class="row">
            <div class="col-md-4 fotlog">
            <h1><span style="color:#0088a9">Soundscore</span></h1>
            <p><span style="color:#0088a9">Soundscore</span>  the leader in audio products presents affordable & high quality products! Shop Now. From </p>
            <a href="register.php"><button class="reg">Contact</button></a>
            </div>



            <div class="col-md-4 fotli">
          <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="#detailAbout">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div>



          <div class="col-md-4 add">
          <h4><i class="fa-solid fa-location-dot" style="color: #0088a9;"></i>  location</h4>
         
            <li><span style="color:#0088a9">(+91)</span> 91- <span style="color:#0088a9">31</span>-6444 - <span style="color:#0088a9">80</span></li>
            <li><span style="color:#0088a9">(+91)</span> 88- <span style="color:#0088a9">89</span>-1857 - <span style="color:#0088a9">80</span></li>
          
            <p>Raipur , <span style="color:#0088a9">Mana Camp</span> in front of shanti kunj hotel</p>
          </div>


          </div>        

        </footer>
    </div>
 
</section>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>