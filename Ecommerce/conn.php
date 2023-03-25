<?php

        $host = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "eshopping";
    
        $conn = mysqli_connect($host, $dbuser,$dbpass, $dbname);
        // set the PDO error mode to exception
        
    
        if(!$conn) {
            die("Error while connecting to the server!");
        }