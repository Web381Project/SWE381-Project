<?php
// Create connection
$conn = mysqli_connect("localhost","root","","Mondo");

$query = "INSERT INTO Categories (category) VALUES ('".$_GET["newCategory"]."')";

if (mysqli_query($conn,$query)) {
echo 'New Category was Added Successfuly';} 
else {
    echo "Not Added!!";
}
mysqli_close($conn);
?>