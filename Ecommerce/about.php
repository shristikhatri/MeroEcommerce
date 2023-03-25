<?php
// session_start();

// if ($_SESSION["fullname"] == null) {
//     $_SESSION["fullname"] = "";
// }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online shopping</title>
    
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3eef95e02e.js" crossorigin="anonymous"></script>
</head>
<body>
    <section id="header">
        <a href="#"><img src="maya.png"class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a  href="index.php">Home</a></li>
                <!-- <li><a href="shop.php">shop</a></li> -->
                <li><a class="active" href="about.php">About</a></li>
                <li><a href="contact.php">contact</a></li>
                
                <!-- <li><a href="login.html">Login</a></li> -->
                <!-- <li><?php if ($_SESSION["fullname"] != "") {
                    //echo ($_SESSION["fullname"]);
                }; ?></li> -->
                <li><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a><li>
                <li><a href="log.php">Login/register</a></li>
                <li><a href="logout.php">Logout</a></li>
                 </ul>
        </div>
    


    </section>
      <section id="page-header" class="about-header">
          <h2>#knowUs</h2>
          <p>Get to know our about our website</p>

      </section>
      <section id="about-head" class="section-p1">
          <img src="dog.jpg"alt="">
          <div>
              <h2>Who We Are?</h2>
              <p>we are SS kloset located in kapan kathmandu.we deliver the best 
                 quality clothes of our customers choice in a reasonable and 
                  affordable price.we also provide our customer with special offers 
                  and gift hamper time to time. </p>

                  
              <br><br>
              <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">thanking all our customers for choosing 
                  SS kloset
              </marquee>
              
          </div>
      </section>
      <section id="about-app" class="section-p1">
          <!-- <h1>Download our<a href="#">App</a></h1> -->
            <div class="video">
            <video autoplay muted loop src="video.mp4"></video>
            </div>
      </section>
      <section id="feature" class="section-p1">
          <div class="fe-box">
              <img src="freeshipping.jpg" alt="">
              <h6>Free shipping</h6>
          </div> <div class="fe-box">
            <img src="online order.jpg" alt="">
            <h6>Online order</h6>
        </div>
        <div class="fe-box">
            <img src="save money.png" alt="">
            <h6>Save money</h6>
        </div>
        <div class="fe-box">
            <img src="happysell.jpg" alt="">
            <h6>Happy sell</h6>
        </div>
        <div class="fe-box">
            <img src="support.jpg" alt="">
            <h6>24/7 support</h6>
        </div>

      </section>
      <!-- <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>sign up for newsletter</h4>
            <p>Get E-mail updates about our latest updates and <span>special offers</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="your E-mail address">
            <button class="normal">sign up</button>
        </div>
    </section>   -->
      <footer class="section-p1">
          <div class="col">
              <img class="logo"src="maya.png" alt="">
              <h4>contact</h4>
              <p><strong>Address:</strong> Kapan,Kathmandu</p>
              <p><strong>contact:</strong> 9865476432</p>
              <p><strong>opening hours:</strong> 9:00-8:00,sun-Fri</p>
              <!-- <div class="follow">
                <h4>Follow Us</h4>
            
            
      
        
      <div class="icons">
          <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
          <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
          <a href="#"><ion-icon name="logo-google"></ion-icon></a>
          <a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a>
          <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
      </div>
            </div> -->
        </div>
              
          
          <div class="col">
              <h4>About</h4>
              <a href="#" onclick="window.location.href='about.php';">About Us</a>
              <a href="#" onclick="window.location.href='cart.php';">Delivery Information</a>
              <!-- <a href="#">Privacy policy</a>
              <a href="#">Terms & Conditions</a> -->
              <a href="#" onclick="window.location.href='contact.php';">Contact Us</a>
          </div>
          <div class="col">
            <h4>My Account</h4>
            <a href="#" onclick="window.location.href='index.html';">Sign-In</a>
            <a href="#" onclick="window.location.href='cart.php';">View Cart</a>
            <!-- <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a> -->
        </div>
      </footer>
    
      <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    
</body>