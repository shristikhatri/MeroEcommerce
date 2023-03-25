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
    <script src="script1.js"></script>
</head>
<body>
    <section id="header">
        <a href="#"><img src="maya.png"class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a  href="index.php">Home</a></li>
                <!-- <li><a href="shop.php">shop</a></li> -->
              
                <li><a href="about.php">About</a></li>
                <li><a class="active" href="contact.php">contact</a></li>
                
                <!-- <li><a class="login.html">Login</a></li> -->
              
                <!-- <li><?php if ($_SESSION["fullname"] != "") {
                    echo ($_SESSION["fullname"]);
                }; ?></li> -->
                <li><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <li><a href="log.php">Login/register</a></li>
                <li><a href="logout.php">Logout</a></li>
                 </ul>
        </div>
    


    </section>
      <section id="page-header" class="about-header">
          <h2>#Let's talk</h2>
          <p>Leave a message,We love to hear from you</p>

          

      </section>
      <section id="contact-details" class="section-p1">
          <div class="details">
              <span>GET IN TOUCH</span>
              <h2>visit our store</h2>
              <h3>our store</h3>
              <div>
                  <li>
                    <i class="fa-solid fa-location-dot"></i>
                      <p>kapan kathmandu</p>
                  </li>
                  <li>
                    <i class="fa-solid fa-phone"></i>
                    <p>9865476432</p>
                </li>
                <li>
                    <i class="fa-solid fa-clock"></i>
                    <p>sunday to friday:9:00 to 8:00</p>
                </li>
                <li>
                    <i class="fa-solid fa-envelope"></i>
                    <p>kloset34@gmail.com</p>
                </li>
              </div>
          </div>
          
      </section>
      <section id="form-details">
          <form action="contac.php" method="POST">
              <span>LEAVE A MESSAGE</span>
              <h2>We love to hear from you</h2>
              <input type="text" name="name" na placeholder="your Name">
              <input type="text" name="email" placeholder="E-mail">
              <input type="text" name="subject" placeholder="Subject">
              <textarea name="yourmessage" id="" cols="30" rows="10" placeholder="Your message"></textarea>
              <button type="submit" class="normal" onclick="myfunction()">Submit</button>
          </form>
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
        
        
    </section>*/   -->

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