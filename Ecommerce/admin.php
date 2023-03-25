<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online shopping</title>
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="style3.css">
    <script src="https://kit.fontawesome.com/3eef95e02e.js" crossorigin="anonymous"></script> 
    <!-- <script src="script.js"></script> -->
    <style>
        input::placeholder, span#ername{
            color: white;
            font-size: 1rem;
        }
        span#ername{
            color: red;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <section id="header">
        <a href="#"><img src="maya.png"class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <!-- <li><a href="index.php">Home</a></li>
                <li><a href="shop.html">shop</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">contact</a></li> -->
                <li><a  href="log.php">User Login</a></li>
                <li><a class=" active" href="admin.php">Admin login</a></li>
                <!-- <li><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a> -->
                 </ul>
        </div>
        </section>
        <div class="full-page">
        <div class="form-box">
            <!-- <h2>Admin Login</h2> -->
            <form id='login' class='input-group-login' method="POST" action="">
                <i class="fa-solid fa-user"></i>
                <input type='text' class='input-field'id="name" name="name"placeholder='Admin Name'required>
                <i class="fa-solid fa-lock"></i>
                <input type='password' id="password" class='input-field' name="password"placeholder='Enter password'required><br><br><br>
                <input type="checkbox" name="" id="" onclick="showpass()"> <label for="">Show Password</label><br><br><br>
                <button type='submit' name="submit" class='submit-btn' name="submit">Log in</button>
            </form>
            <script src="regs.js"></script>
        </div>
        <div class="error">
        <?php
session_start();
require "conn.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $password=$_POST['password'];


    $sql="select * from adminlogin where name='$name' and password='$password'";
    $query=mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($query);

         if($num != 1){
            echo ('<script> alert("Invalid username or password !!")</script>');
            
         }
            else{
            while($row = mysqli_fetch_assoc($query)){
                $_SESSION['name'] = $row['name'];
                header("location: admin_panel.php");
            }
           
        }
}
?>
        </div>
        </div>

    </body>
    </html>