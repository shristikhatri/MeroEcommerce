<?php
require_once "conn.php";


$email = $_POST["email"];

$insert = "INSERT INTO `newsletter` (`email`) VALUES ('$email')";


if ($conn->query($insert)){
    header("location: http://localhost/Shusma-and-shristi/website2/home.php");

}
else{
    echo "account already exist";
}

