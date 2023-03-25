<?php
session_start();
require "conn.php";


// if ($_SESSION["fullname"] == null) {
//     $_SESSION["fullname"] = "";
// };

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
        <a href="#"><img src="maya.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <!-- <li><a href="shop.php">shop</a></li> -->
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">contact</a></li>
                
                
               
                    
                <li><a class="cartbtn" href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
                <li><a href="log.php">Login/register</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </section>
    <section id="hero">
        <h4>Clothes-In-Offer</h4>
        <h2>super value deals</h2>
        <h1>On All Product</h1>
        <p>save more money & up to 50% off</p>
        <!-- <button onclick="window.location.href='shop.php';">Shop Now</button> -->
    </section>
    <section id="product1" class="section-p1">
        <h2>Featured products</h2>
        <p>summer collection new design</p>
        <div class="pro-container">
            <?php
                $sql = "SELECT * FROM `product` ORDER BY `id`";
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

                <a href="setCart.php?id=<?php echo $id; ?>"><i class="fa-solid fa-cart-shopping cart" style="padding-top:10px"></i></a>

            </div>
            <?php
            }
        }
        ?>
    </section>
    <section id="banner" class="section-m1">
        <h4>Exchange service</h4>
        <h2>upto<span>20% off</span> on shoes</h2>
        <button class="normal" onclick="window.location.href='explore.php';">Explore more</button>
    </section>
    <!-- <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>summer collection new design</p>
        <div class="pro-container">
        
             <div class="pro">
                <img src="arrival1.jpg" alt="">
                <div class="des">
                    <h5> checked onepiece</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 1800</h4>
                </div>
                <a href="./setCart.php?p=9&pr=1800&img=arrival.jpg"><i class="fa-solid fa-cart-shopping cart" style="padding-top:10px"></i></a>
            </div>

        </div>
    </section> -->
    <section id="sm-banner" class="section-p1">
        <div class="banner-box" onclick="window.location.href='womens.php';">
            <h4>Womens collection</h4>
            <span>New trendy dresses with best quality</span>
            <button class="white">Collection</button>
        </div>
        <div class="banner-box banner-box2" onclick="window.location.href='mens.php';">
            <h4>mens collection</h4>
            <span>New trendy dresses with best quality</span>
            <button class="white">Collection</button>
        </div>
    </section>

    

    
    

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="maya.png" alt="">
            <h4>contact</h4>
            <p><strong>Address:</strong> Kapan,Kathmandu</p>
            <p><strong>contact:</strong> 9865476432</p>
            <p><strong>opening hours:</strong> 9:00-8:00,sun-Fri</p>
            




                
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#" onclick="window.location.href='about.php';">About Us</a>
            <a href="#"onclick="window.location.href='cart.php';">Delivery Information</a>
            
            <a href="#"onclick="window.location.href='contact.php';">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#"onclick="window.location.href='index.html';">Sign-In</a>
            <a href="#"onclick="window.location.href='cart.php';">View Cart</a>
            
        </div>
    </footer>


    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>


</body>

</html>