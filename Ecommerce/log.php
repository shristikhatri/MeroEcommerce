<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online shopping</title>
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="style1.css">
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
               <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">contact</a></li>
                
                <li><a class="active" href="log.php">User Login</a></li>
                <li><a href="admin.php">Admin login</a></li>
                <li><a href="logout.php">Logout</a></li>
                <!-- <li><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a> -->
                 </ul>
        </div>
        </section>
        <div class="full-page">
    
    
    
    
        <div class="form-box">
            <div class='button-box'>
                <div id='btn'></div>
                <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                <button type='button'onclick='register()'class='toggle-btn'>Register</button>
            </div>
            <form id='login' class='input-group-login' action="login.php" method="POST">
                <!-- <i class="fa-solid fa-envelope"></i> -->
                <input type='text' class='input-field' name="email"placeholder='Email Id'required>
                <!-- <i class="fa-solid fa-lock"></i> -->
                <input type='password' id="password" class='input-field' name="password"placeholder='Enter password'required><br><br><br>
                <!-- <input type='checkbox' class='check-box'><span>Remember Password</span> <br> -->
                <input type="checkbox" name="" id="" onclick="showpass()"> <label for="">Show Password</label><br><br><br>
                <button type='submit'class='submit-btn' name="submit">Log in</button>
            </form> 
            <form id='register' class='input-group-register' action="register.php" method="POST">
                
                <input type='text' id= "fname" class='input-field'name="firstname" placeholder='First Name' required>
                
                <input type='text' id="lname" class='input-field'name="lastname" placeholder='Last Name' required>
                
                <input type='text' id="email" class='input-field' name="email" placeholder='Email Id' required>
                
                <input type='password' id="password" class='input-field' name="password" placeholder='Enter password' required>
                
                <input type='password' id="confirm-password" class='input-field' name="confirm-password" placeholder='Confirm Password' required><br><br>
                <input type="checkbox" name="" id="" onclick="showpass()"> <label for="">Show Password</label><br><br>
                <button type='submit' class='submit-btn' name="submit">Register</button> <br> <br> <br><br> <br> <br>
                <span id="ername"></span>

            </form>

        </div>
    </div>
</div>

           
<script src="regs.js"></script>
    <script>
        var x=document.getElementById('login');
        var y=document.getElementById('register');
        var z=document.getElementById('btn');
        function register()
        {
            x.style.left='-400px';
            y.style.left='50px';
            z.style.left='110px';
        }
        function login()
        {
            x.style.left='50px';
            y.style.left='450px';
            z.style.left='0px';
        }

        var modal=document.getElementById('login-form');
        window.onclick=function(event)
        {
            if(event.target==modal)
            {
                modal.style.display="none";
            }
        }

        // document.getElementsByClassName



    </script>
    </body>
    </html>
    