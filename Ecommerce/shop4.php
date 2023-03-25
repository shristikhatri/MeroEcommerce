<?php
session_start();

if ($_SESSION["fullname"] == null) {
    $_SESSION["fullname"] = "";
}
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
                <li><a href="home.php">Home</a></li>
                <li><a class="active" href="shop.php">shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">contact</a></li>
                <!-- <li><a href="login.html">Login</a></li> -->
                <li><?php if ($_SESSION["fullname"] != "") {
                        echo ($_SESSION["fullname"]);
                    }; ?></li>
                    <li><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a><li>
                    <li><a href="logout.php">Logout</a></li>
                 </ul>
        </div>
    </section>

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="summer4.jpg"width="100%"  alt="">
        </div>
        <div class="single-pro-details">
            <h6>Womens wear</h6>
            <h4>Long gown</h4>
            <h2>Rs 3000</h2>
            <select>
                <option>Select size</option>
                <option>XL</option>
                <option>XXL</option>
                <option>Small</option>
                <option>Medium</option>
                <option>Large</option>
            </select>
            <h4>Product details</h4>
            <span>The Long gown is made up of 100% silk,this long gown provides unmatched comfort 
                with each wear.This long gown is one of the best seller outfit .
            </span>
        </div>
    </section>
    <section id="product1" class="section-p1">
        <h2>Featured product</h2>
        <p>summer collection new design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="dressesgirl/long.jpg" alt="">
                <div class="des">
                    <h5> Long gown</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 3000</h4>
                </div>
            </div>
            <div class="pro">
                <img src="dressesgirl/long2.jpg" alt="">
                <div class="des">
                    <h5> Long gown</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 3000</h4>
                </div>
            </div>
            <div class="pro">
                <img src="dressesgirl/long3.jpg" alt="">
                <div class="des">
                    <h5> Long gown</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 3000</h4>
                </div>
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
      </section>  
      <footer class="section-p1">
          <div class="col">
              <img class="logo"src="maya.png" alt="">
              <h4>contact</h4>
              <p><strong>Address:</strong> Kapan,Kathmandu</p>
              <p><strong>contact:</strong> 9865476432</p>
              <p><strong>opening hours:</strong> 9:00-8:00,sun-Fri</p>
              
          </div>
          <div class="col">
              <h4>About</h4>
              <a href="#">About Us</a>
              <a href="#">Delivery Information</a>
              <a href="#">Privacy policy</a>
              <a href="#">Terms & Conditions</a>
              <a href="#">Contact Us</a>
          </div>
          <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign-In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
      </footer>
     -->
    <script src="script.js"></script>
    
</body>
</html>