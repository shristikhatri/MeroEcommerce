<?php
require "conn.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online shopping</title>

    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3eef95e02e.js" crossorigin="anonymous"></script>
       <script src="script2.js"></script>
</head>

<body>
<section id="header">
         <a href="#"><img src="maya.png"class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                
                <li><a href="logout.php">Logout</a></li>
                 </ul>
    </div>
    </section>
     <section id="form-details">
          <form action = "" method = "POST" enctype = "multipart/form-data">
             <h2>Add Shoes</h2>
              <span>product name</span>
              <input type="text" name="name" id="">
              <span>price:</span>
              <input type="text" name="price" id="">
              <span>image:</span>
              <input type="file" name="img" id="">
              <button type="submit" name="submit" class="normal" id="">add</button>

          </form>
          <?php
                if(isset($_POST['submit'])){
                    $name  = $_POST['name'];
                    $price  = $_POST['price'];
                    $image  = $_FILES['img'];
                    $fname = $image['name'];
                    $tname = $image['tmp_name'];

                    $location = 'product_image/' . $fname;

                    move_uploaded_file($tname, $location);
    $insert= "INSERT INTO `shoes` (`name`, `price`, `image`) VALUES('$name', $price,'$location')";
     
    $query = mysqli_query($conn, $insert);
    echo "<script>alert('Item Added');
    window.location.href = 'add_explore.php';
    </script>";

                }

?>

</section>
</body>
</html>
      
