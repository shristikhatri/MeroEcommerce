<?php
require "conn.php";


    $firstname=$_POST["firstname"];
    $lastname=$_POST['lastname'];
    $fullname=$firstname.' '.$lastname;
    $email= $_POST["email"];
    $password =$_POST["password"];
    $cpassword = $_POST['confirm-password'];

    // $error = [];
    $number = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    if (strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
        echo ('<script> alert("Please enter valid password !!")</script>');
    } else {
        if($password != $cpassword){
            echo ('<script> alert("Passwod and confirm password is not matching !!")</script>');
        }
        else{
            $pass = password_hash($password, PASSWORD_DEFAULT);
    $insert= "INSERT INTO `userr` (`fullname`, `email`, `password`) VALUES('$fullname', '$email','$pass')";

if ( mysqli_query($conn, $insert)){
    header("location: index.html");
   }
   else{
       echo "account already exist";
   }
}
}
