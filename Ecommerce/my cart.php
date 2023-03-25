<?php
session_start();
require_once "conn.php";


$email = $_SESSION["email"];



$insert = "INSERT INTO MyGuests (uid, productid, cartid)
VALUES ('$uid', '$productid', '$email') ";


if ($conn->query($insert)){
    header("location: http://localhost/backend/website2/cart.php");
}
else{
    echo "account already exist";
}
?>