
<?php

$conn = mysqli_connect("localhost","root","","Mondo");

$try = "SELECT * FROM 'Users' WHERE Name LIKE '".$_POST['form-username']."'";

if(mysqli_num_rows($try) == 0){
$query =  "INSERT INTO `Users`(`Name`, `Email`, `Password`) VALUES ('".$_POST['form-username']."','".$_POST['form-email']."','".$_POST['form-password']."')";
 
if (mysqli_query($conn,$query)) {
	header('Location: signin.php');
} }

else{
    header('Location: signup.php');
}

$conn->close();
?>