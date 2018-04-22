<?php 

session_start();
$conn = mysqli_connect("localhost","root","","Mondo");

if (isset($_POST['submit'])) {
	$user =$_POST['form-user'];
	$password =$_POST['form-password'];

    
$query = "SELECT * FROM Users WHERE Name LIKE '$user' AND Password LIKE '$password'";
	$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result) == 1){
	   $row = $result->fetch_assoc();
		$_SESSION['ID'] = $row['ID'];
		$_SESSION['Email'] = $row['Email'];
		$_SESSION['Name'] = $row['Name'];
		$_SESSION['Type']= $row['Type'];

    echo "<script>alert('Logged In successfullu!')";
    header('Location:Home.php');
    
} else {
     echo "<script>alert('Wrong Email or Password!');
     window.location.href='signin.php';</script>";
 }
}

?>