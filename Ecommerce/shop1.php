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
                <li><a href="index.php">Home</a></li>
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
    <section id="page-header">
        <h2>#Stayhome</h2>
        <p>save more money &up to 50% off</p>
        
    </section>
    <section id="product1" class="section-p1">
        
        <div class="pro-container">
            <div class="pro">
                <img src="summer1.jpg" alt="">
                <div class="des">
                    <h5> Baby pink onepiece</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 2000</h4>
                </div>
            </div>
            <div class="pro"  onclick="window.location.href='sproduct.php';">
                <img src="summer2.png" alt="">
                <div class="des">
                    <h5> Floral onepiece</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 1800</h4>
                </div>
            </div>
            <div class="pro">
                <img src="summer3.jpg" alt="">
                <div class="des">
                    <h5> white onepiece</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 2000</h4>
                </div>
            </div>
            <div class="pro">
                <img src="summer4.jpg" alt="">
                <div class="des">
                    <h5> long gown</h5>
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
                <img src="dressesboy/beach3.jpg"alt="">
                <div class="des">
                    <h5> Beach t-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 1000</h4>
                </div>
            </div>
            <div class="pro">
                <img src="dressesboy/blue4.jpg" alt="">
                <div class="des">
                    <h5>Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 1500</h4>
                </div>
            </div>
            <div class="pro">
                <img src="summer7.jpg" alt="">
                <div class="des">
                    <h5> stripe shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 1000</h4>
                </div>
            </div>
            <div class="pro">
                <img src="boy1.jpg" alt="">
                <div class="des">
                    <h5>Plain t-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 1000</h4>
                </div>
            </div>
            
       
    
    
        
            <div class="pro">
                <img src="arrival1.jpg" alt="">
                <div class="des">
                    <h5> Blue checked onepiece</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 1800</h4>
                </div>
            </div>
            <div class="pro">
                <img src="arrival4.jpg" alt="">
                <div class="des">
                    <h5> checked onepiece</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 1600</h4>
                </div>
            </div>
            <div class="pro">
                <img src="arrival3.jpg" alt="">
                <div class="des">
                    <h5> straight jeans</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 2000</h4>
                </div>
            </div>
            <div class="pro">
                <img src="dressesgirl/dotteddress3.jpg" alt="">
                <div class="des">
                    <h5>Dotted dress</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 2000</h4>
                </div>
            </div>
            <div class="pro">
                <img src="dressesboy/sayingtshirt.jpg" alt="">
                <div class="des">
                    <h5>Saying t-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 1000</h4>
                </div>
            </div>
            <div class="pro">
                <img src="dressesboy/checkedshirt4.jpg" alt="">
                <div class="des">
                    <h5>Check shirt</h5>
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
                <img src="dressesboy/denim2.jpg" alt="">
                <div class="des">
                    <h5>Denim jacket</h5>
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
                <img src="arrival8.jpg" alt="">
                <div class="des">
                    <h5> Jeans</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 2500</h4>
                </div>
            </div>
            
        </div>
    </section>
    <!-- <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
    </section>
   
            
      <section id="newsletter" class="section-p1 section-m1">
          <div class="newstext">
              <h4>sign up for newsletter</h4>
              <p>Get E-mail updates about our latest updates and <span>special offers</span></p>
          </div>
          <div class="form">
              <input type="text" placeholder="your E-mail address">
              <button class="normal">sign up</button>
          </div> -->
      <!-- </section>   -->
      <!-- <footer class="section-p1">
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