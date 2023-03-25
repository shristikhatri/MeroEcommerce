<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online shopping</title>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style4.css">
    <script src="https://kit.fontawesome.com/3eef95e02e.js" crossorigin="anonymous"></script>
    <style>
        li{
            margin-left: 2vh;
        }
    </style>
</head>
<body>
    <section id="header">
         <a href="#"><img src="maya.png"class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                
                <li><a href="logout.php">Logout</a></li>
                 </ul>
    </div>
    </section>
    
        
        
        
        
        <div class="side-menu">
          <div class="brand-name">
         <!-- <h1>Dashboard</h1> -->
          </div>
            <ul>
                <li>Dashboard</li>
                <!-- <li><a href="admin_profile.php" alt="">Admin Profile</a></li> -->
                <li><a href="add_product.php" alt="">Add Product</a></li>
                <li><a href="add_womens.php" alt="">Women Product</a><li>
                <li><a href="add_mens.php" alt=""> Mens Product</a><li>
                <li><a href="add_explore.php" alt=""> Add Shoes</a></li>
                <!-- <li><a href="order.php" alt=""></a></li> -->
                
                  
</ul>
        </div>
        <section id="home">
            
            <div class="main">
                <h1 class="headings">WELCOME<br><?php echo $_SESSION['name']; ?></h1>
            
</div>
        </section>

     
            
        
            
        </body>
        </html>