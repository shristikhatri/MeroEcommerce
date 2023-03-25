<?php

require_once "conn.php";

$name = $_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$yourmessage=$_POST["yourmessage"];


$insert = "INSERT INTO `feedback` (`name`,`email`,`subject`,`your message`) VALUES ('$name','$email','$subject','$yourmessage')";


if ($conn->query($insert)){
    header("location: http://localhost/Shusma-and-shristi/contact.php");
}
else{
    echo "account already exist";
}
