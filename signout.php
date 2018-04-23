<?php
session_start();
session_destroy();
echo "<script>alert(You have signed out successfuly!')</script>";
header("location:Home.php")
?>