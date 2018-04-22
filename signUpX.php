
<?php

$conn = mysqli_connect("localhost","root","","Mondo");
$query =  "INSERT INTO `Users`(`Name`, `Email`, `Password`) VALUES ('".$_POST['form-username']."','".$_POST['form-email']."','".$_POST['form-password']."')";
 
 
if (mysqli_query($conn,$query)) {
	header('Location: signin.php');
} 

$conn->close();
?>