<?php
echo "lll";
session_start();
session_unset();
session_destroy();
header("location: log.php");
?>