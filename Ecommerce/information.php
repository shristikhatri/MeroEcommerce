<?php
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect("$server","$username","$password");
if($con==true){
    echo"connection was successful<br>";
}
else{
    die("some error occures");
}



?>