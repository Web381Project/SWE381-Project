<?php
    
$db = mysqli_connect("localhost","root","","Mondo");

if(!$db) {
    echo 'Database connection failed:'. mysqli_connect_error();
    die();
}

?>