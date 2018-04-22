<?php
// Create connection
$conn = mysqli_connect("localhost","root","","Mondo");

$query = "INSERT INTO Categories (category) VALUES ('".$_GET["newCategory"]."')";

if (mysqli_query($conn,$query)) {
  echo "<script>alert('Category add successfuly')
     window.location.href='addCategory.php';</script>";
} else {
     echo "<script>alert('Sorry, something went wrong!')</script>";
 }
mysqli_close($conn);
?>