<?php

require "conn.php";
$id = $_GET["id"];

// echo $id;

$query_command="DELETE  FROM `carts` WHERE `pid`='$id'";
$result = mysqli_query($conn, $query_command);

if ( $result){
    
    ?>
    <script>window.history.back()</script>
    <?php
   }
   else{
       echo "unsuccessful";
   }


?>