<?php
session_start();
require "conn.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $password=$_POST['Password'];[]


    $sql="select * from adminlogin where name='$name' and password='$password'";
    $query=mysqli_query($conn,$sql);

    $row=mysqli_num_rows()
    {

         if($row == 1){
            echo"login successful";
            $_SESSION['name']=$name;
            header('location:admin panel.php');
          }else{
            echo"login failed";
            header('location:admin.php');
        }
    }
}
?>