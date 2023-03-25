<?php
require "conn.php";

$id = $_GET['id'];
// echo $id;
$sql = "SELECT * FROM `womens` WHERE `id` = '$id'";
$query = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($query)){
    $name = $row['name'];
    $price= $row['price'];
    $s = "INSERT INTO `carts` (`name`, `amount`) VALUES('$name', '$price')";
    $qry = mysqli_query($conn, $s);
    if($qry){
        echo "<script>alert('Item Added');
        window.location.href = 'womens.php';
        </script>";
    }
}?>