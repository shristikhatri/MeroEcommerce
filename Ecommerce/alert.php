<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>alert(<?php  echo $_GET["alert"];  header("location: http://localhost/backend/website2/index.php")?>)</script>
</body>
</html>