<?php
require "conn.php";
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
        <p>save more money &up to 50% off</p>
        
    </section>
    <section id="product1" class="section-p1">
        
        <div class="pro-container">
        <?php
                $sql = "SELECT * FROM `shoes` ORDER BY `id`";
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

                <a href="setCart1.php?id=<?php echo $id; ?>"><i class="fa-solid fa-cart-shopping cart" style="padding-top:10px"></i></a>
            </div>
            <?php
            }
        }
        ?>

                <!-- <img src="dressesgirl/shoe1.webp" alt="">
                <div class="des">
                    <h5> Blue Jordan</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Rs 4000</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesgirl/shoe1.webp"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesgirl/shoe2.webp" alt="">
                <div class="des">
                    <h5> Nike airforce1</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Rs 4500</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesgirl/shoe2.webp"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesgirl/shoe3.jpg" alt="">
                <div class="des">
                    <h5> Nike air</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Rs 5000</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesgirl/shoe3.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesgirl/shoe4.jpg" alt="">
                <div class="des">
                    <h5> Old school vans</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Rs 2000</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesgirl/shoe4.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesgirl/shoe5.jpg"alt="">
                <div class="des">
                    <h5> Customized converse</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Rs 2500</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesgirl/shoe5.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesgirl/shoe6.jpg" alt="">
                <div class="des">
                    <h5>Light up nike shoe</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Rs 8000</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesgirl/shoe6.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesgirl/shoe7.jpg" alt="">
                <div class="des">
                    <h5> Yeezy boost 350</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Rs 2000</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesgirl/shoe7.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesgirl/shoe8.webp" alt="">
                <div class="des">
                    <h5>New balance</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Rs 3000</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesgirl/shoe8.webp"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            
       
              <div class="pro">
                <img src="dressesgirl/t1.jpg" alt="">
                <div class="des">
                    <h5>  Nike crop t-shirt</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    
                    <h4>Rs 1500</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesgirl/t1.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesgirl/t2.jpg" alt="">
                <div class="des">
                    <h5> Nike t-shirt</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    
                    <h4>Rs 1500</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesgirl/t2.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesgirl/t3.jpg" alt="">
                <div class="des">
                    <h5> Adidas t-shirt</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>i>
                    </div>
                    
                    <h4>Rs 2000</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesgirl/t3.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesgirl/t4.jpg" alt="">
                <div class="des">
                    <h5>Crop t-shirt</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    
                    <h4>Rs 1000</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesgirl/t4.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesgirl/t5.jpg" alt="">
                <div class="des">
                    <h5>Half t-shirt</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    
                    <h4>Rs 1000</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesgirl/t5.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesgirl/t6.jpg" alt="">
                <div class="des">
                    <h5>Nike slipper</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    
                    <h4>Rs 1800</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesgirl/t6.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesgirl/t7.webp" alt="">
                <div class="des">
                    <h5>Slipper</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Rs 1800</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesgirl/t7.webp"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            <div class="pro">
                <img src="dressesgirl/t8.jpg" alt="">
                <div class="des">
                    <h5> Crop t-shirt</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Rs 1000</h4>
                </div>
                <a href="./setCart.php?p=1&pr=2000&img=dressesgirl/t8.jpg"><i class="fa-solid fa-cart-shopping cart"style="padding-top:10px"></i></a>
            </div>
            
        </div>
    </section>
    
   
             -->
      
      
            
      
        
      
             
    
</body>
</html>