<?php
// session_start();
require "conn.php";

// if ($_SESSION["fullname"] == null) {
//     $_SESSION["fullname"] = "";


                    
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
       <script src="script2.js"></script>
       <style>
        div.last{
            /* float : right; */
        }
       </style>
</head>

<body>
    <section id="header">
        <a href="#"><img src="maya.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <!-- <li><a href="shop.php">shop</a></li> -->
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">contact</a></li>
                <!-- <li><a href="login.html">Login</a></li> -->
                <!-- <li><?php if ($_SESSION["fullname"] != "") {
                   // echo ($_SESSION["fullname"]);
                }; ?></li> -->
               
                <li><a class="active" href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <li><a href="log.php">Login/register</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>


        
    </section>
    <section id="page-header" class="about-header">
        <h2>#Let's talk</h2>
        <p>Leave a message,We love to hear from you</p>



    </section>
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Product</td>
                    <td>Price</td>
                </tr>
            </thead>
            <tbody>


                <?php
                    // $id = $_GET['id'];
                    // echo $id;
                    $total = 0;
                    $sq = "SELECT * FROM `carts`";
                    $res = mysqli_query($conn, $sq);
                    while($row = mysqli_fetch_assoc($res)){
                        // $_SESSION['name'] = $row['name'];
                        // $_SESSION['price']= $row['amount'];
                        $id =$row['pid'];
                        $total =  $total +$row['amount'];
                 ?>
                <tr>
                   
                    <td><a href='delete.php?id=<?php echo $id; ?>' onClick=''>Delete</a></td>
                    <td><?php echo  $row['name']; ?></td>
                    <td id = "prc"><?php echo $row['amount']; ?></td>
                </tr>
                <?php
                   }
                   ?>
            </tbody>
        </table>
    </section>
 


    <!-- <section id="cart-add" class="section-p1"> -->
    <!-- <section id="cart-add" class="section-p1">
        
    //     <div id="coupon">
    //         <h3>Delivery Information </h3>
    //         <div>
              
    //             <input type="text" placeholder="Full Name">
    //             <input type="text" placeholder="Address">
    //             <input type="text" placeholder="city">
    //             <input type="number" placeholder="Phone Number">
                
    //             <button class="normal" onclick="window.location.href='form.php';">Check In</button>
                
    //         </div>
    //     </div> -->

        
        <div id="subtotal">
            <h3>Cart totals</h3>
            <table>
                <tr>
                    <td>cart subtotal</td>
                    <td id="subtotalamount">RS <?php echo $total; ?></td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>Rs <?php echo $total; ?></strong></td>
                </tr>
                
 
            </table>
             <!-- <button class="normal" onclick="window.location.href='form.php';">Check In</button> -->
            
        </div>
        
       </section>
       <?php
require('config.php');
?>
<form action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="3800"
		data-name="Processed To Checkout"
        data-address="kathmandu"
		data-description="Happy shopping..."
		data-currency="usd"
		data-email=""
	>
	</script>

</form>
    

    <!-- <script>
        function calc(){
            // let arr = new array();
            let prc =document.getElementById('prc').innerText;
        let qty =document.getElementById('qty').value;
        if(qty < 1 ){
            alert("Invalid quantity");
        }else{

            let cl = prc*qty;
            document.getElementById('tot').innerText = cl;
        }
        }
    </script> -->

    <!-- <footer class="section-p1">
        <div class="col">
            <img class="logo" src="maya.png" alt="">
            <h4>contact</h4>
            <p><strong>Address:</strong> Kapan,Kathmandu</p>
            <p><strong>contact:</strong> 9865476432</p>
            <p><strong>opening hours:</strong> 9:00-8:00,sun-Fri</p>
            <div class="follow">
                <h4>Follow Us</h4>




                <div class="icons">
                    <a href="#">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-google"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-whatsapp"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>

                </div>
            </div>
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
    </footer> -->

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>
<script>
    // document.querySelector("#total").innerHTML =
    //     (document.querySelector("#sub").innerHTML).split(" ")[1] * (+document.querySelector("#quantity").value);
    // document.querySelector("#subtotalamount").innerHTML =
    //     (document.querySelector("#sub").innerHTML).split(" ")[1] * (+document.querySelector("#quantity").value);

    // document.querySelector("#quantity").addEventListener("click", () => {
    //     document.querySelector("#total").innerHTML =
    //         (document.querySelector("#sub").innerHTML).split(" ")[1] * (+document.querySelector("#quantity").value);
    //     console.log(document.querySelector("#quantity").value);
    //     document.querySelector("#subtotalamount").innerHTML =
    //         (document.querySelector("#sub").innerHTML).split(" ")[1] * (+document.querySelector("#quantity").value);
    // })
</script>
<!-- <i class='fa-solid fa-circle-xmark'> -->