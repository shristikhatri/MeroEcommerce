<?php
require "conn.php";
session_start();

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
                <li><a class="active" href="index.php">Home</a></li>
                <!-- <li><a  href="shop.php">shop</a></li> -->
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">contact</a></li>
                <!-- <li><a href="login.html">Login</a></li> -->
                <!-- <li><?php if ($_SESSION["fullname"] != "") {
                        echo ($_SESSION["fullname"]);
                    }; ?></li> -->
                <li><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a><li>
                <li><a href="log.php">Login/register</a></li>
                <li><a href="logout.php">Logout</a></li>
                 </ul>
        </div>
    </section>
    <section id="page-header">
        <h2>#Stayhome</h2>
        <p>save more money</p>
        
    </section>
    <section id="product1" class="section-p1">
        
        <div class="pro-container">
        <?php
                $sql = "SELECT * FROM `mens` ORDER BY `id`";
                $res = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($res);
                if($num >0){
                while($row = mysqli_fetch_assoc($res)){
                    $id = $row['id'];
                    $name = $row['name'];
                    $price = $row['price'];
                    $image = $row['image'];
              ?>
        <div class="pro">
                <img src="<?php echo $image; ?>" alt="">
                <div class="des">
                    <h5> <?php echo $name; ?></h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Rs <?php echo $price; ?></h4>
                </div>

                <a href="setCart3.php?id=<?php echo $id; ?>"><i class="fa-solid fa-cart-shopping cart" style="padding-top:10px"></i></a>

            </div>
            <?php
            }
        }
        ?>
            <!-- <div class="pro" onclick="window.location.href='sproduct.html';">
                <img src="dressesboy/beach.jpg" alt="">
                <div class="des">
                    <h5> Beach t-shirt </h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Rs 2000</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesboy/beach.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesboy/blue.jpg" alt="">
                <div class="des">
                    <h5> Shirt</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Rs 1800</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesboy/blue.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesboy/boy1.jpg" alt="">
                <div class="des">
                    <h5> shirt</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Rs 2000</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesboy/boy1.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesboy/boyjeans.jpg" alt="">
                <div class="des">
                    <h5> Straight jeans</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Rs 3000</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesboy/boyjeans.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesboy/checkedshirt.jpg"alt="">
                <div class="des">
                    <h5> Checked shirt</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Rs 2000</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesboy/checkedshirt.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesboy/denim.jpg" alt="">
                <div class="des">
                    <h5>Denim jacket</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Rs 1800</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesboy/denim.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesboy/beach2.jpg" alt="">
                <div class="des">
                    <h5> Beach t-shirt</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Rs 2000</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesboy/beach2.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesboy/blue2.jpg" alt="">
                <div class="des">
                    <h5>Shirt</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Rs 1000</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesboy/blue2.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            
       
              <div class="pro">
                <img src="dressesboy/boy3.jpeg" alt="">
                <div class="des">
                    <h5>  Shirt</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    
                    <h4>Rs 1800</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesboy/boy3.jpeg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesboy/checkedshirt2.jpg" alt="">
                <div class="des">
                    <h5> checked shirt</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    
                    <h4>Rs 1600</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesboy/checkedshirt2.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesboy/denim2.jpg" alt="">
                <div class="des">
                    <h5> Denim jacket</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>i>
                    </div>
                    
                    <h4>Rs 2000</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesboy/denim2.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesboy/sayingtshirt2.jpg" alt="">
                <div class="des">
                    <h5>Saying t-shirt</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    
                    <h4>Rs 2000</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesboy/sayingtshirt2.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesboy/stripe3.jpg" alt="">
                <div class="des">
                    <h5>Stripe t-shirt</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    
                    <h4>Rs 1000</h4> -->
                <!-- </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesboy/stripe3.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesboy/blue3.jpg" alt="">
                <div class="des">
                    <h5>shirt</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    
                    <h4>Rs 1800</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesboy/blue3.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesboy/beach3.jpg" alt="">
                <div class="des">
                    <h5>Beach t-shirt</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Rs 2000</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesboy/beach3.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesboy/boy4.jpg" alt="">
                <div class="des">
                    <h5> Shirt</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Rs 1800</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesboy/boy4.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            
        </div>
    </section>
     -->
   
            
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
      <!-- <footer class="section-p1">
          <div class="col">
              <img class="logo"src="maya.png" alt="">
              <h4>contact</h4>
              <p><strong>Address:</strong> Kapan,Kathmandu</p>
              <p><strong>contact:</strong> 9865476432</p>
              <p><strong>opening hours:</strong> 9:00-8:00,sun-Fri</p> -->
              <!-- <div class="follow"> -->
                <!-- <h4>Follow Us</h4>
            
            
      
        
      <div class="icons">
          <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
          <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
          <a href="#"><ion-icon name="logo-google"></ion-icon></a>
          <a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a>
          <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
      </div>
            </div> -->
        <!-- </div>
              
          
          <div class="col">
              <h4>About</h4>
              <a href="#" onclick="window.location.href='about.php';">About Us</a>
              <a href="#" onclick="window.location.href='cart.php';">Delivery Information</a> -->
              <!-- <a href="#">Privacy policy</a>
              <a href="#">Terms & Conditions</a> -->
              <!-- <a href="#" onclick="window.location.href='contact.php';">Contact Us</a>
          </div>
          <div class="col">
            <h4>My Account</h4>
            <a href="#" onclick="window.location.href='index.html';">Sign-In</a>
            <a href="#" onclick="window.location.href='cart.php';">View Cart</a> -->
            <!-- <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a> -->
        <!-- </div>
      </footer>
    
      <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
     -->
</body>
</html>