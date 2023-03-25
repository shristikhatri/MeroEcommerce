<?php
session_start();
require "conn.php";


if (isset($_POST['submit'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];


    $query_command="SELECT * FROM `userr` WHERE `email`='$email'";
    $result = mysqli_query($conn, $query_command);

    $num = mysqli_num_rows($result);
    if ($num) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            if(password_verify($password, $row['password'])){
             $_SESSION["email"] = $row["email"];
             $_SESSION["fullname"]= $row["fullname"];
            //  header("location: http://localhost/Shusma-and-shristi/cart.php");
             
            header("location:cart.php");

        }
        else {
          ?>
          <script>alert("Username and password incorrect")
      history.back()</script>
          <?php
        }
      } 
}}
?>
   

