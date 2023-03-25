<?php

require_once "conn.php";

$email=$_POST["email"];
$password=$_POST["password"];



$insert = "INSERT INTO `info` (`email`,`password`) VALUES ('$email','$password')";


if ($conn->query($insert)){
    header("location: http://localhost/backend/website2/cart.php");
}
else{
    echo "account already exist";
}
