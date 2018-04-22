<?php
require_once('core/init.php');

session_start();
if(isset($_SESSION['ID'])==false){
header('location:Home.php');
}

if(isset($_POST["logOut"])) {

@session_start();   
session_destroy();
    
}

if(isset($_POST["updateProfile"])) {
    
$email=$_POST['email'];
$name=$_POST['name'];
       
    
if($_POST['name']!='') { 
$query = "UPDATE Users SET Name = '$name' WHERE ID = '".$_SESSION['ID']."' ";
if($_POST['email']!='') { 
$query = "UPDATE Users SET Email = '$email' WHERE ID = '".$_SESSION['ID']."' ";}
if (mysqli_query($db,$query)) {
   echo "<script>alert('Updated!!!');
     window.location.href='Profile.php';</script>";
}
 else {
     echo "<script>alert('Not Updated!!!');
     window.location.href='Profile.php';</script>";
 }
}
}



?>

<html lang="en">
<head>
	<title>Profile</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>   
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    
</head>
<body>
   

<header class="pageHeader">
	   <?php include 'includes/navigation.php'; ?>     
	</header>
     
    
<div style="margin: 10% 0 6% 10%;">

<form method="post" action="Profile.php">
<fieldset>

<!-- NAME -->
<div class="form-group">
  <h3 style="margin-bottom:19px;">Type the information and click update to change your information</h3>
    
    
    
  <h5>Personal Information:</h5>    
  <label class="col-md-4 control-label" for="textinput">Member Name:</label>  
  <div class="col-md-4">
  <input id="textinput" name="name" type="text" placeholder="<?php echo($_SESSION['Name'])?>" class="form-control input-md">
  </div>
</div>

<!-- EMAIL -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email</label>  
  <div class="col-md-4">
  <input id="textinput" name="email" type="text" placeholder="<?php echo($_SESSION['Email'])?>" class="form-control input-md">
  </div>
</div>

<!-- CREDIT CARDS -->
<h5>Credit Cards:</h5>    
   
    
<!-- ADDRESS -->
<h5>Addresses:</h5>    
    

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="updateProfile" class="btn btn-primary">Update</button>
  </div>
</div>

</fieldset>
    
        
  </form>
    <div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <form method="post" action="signout.php">
    <button id="singlebutton" name="logOut" class="btn btn-primary">Sign out</button>
 </div>
</div>

   </form>
 
 
        <div class="form-group col-md-8" >
                        
            <br>
           <a href="billing.php"> <button name="updateProfile" class="btn btn-primary">Show Order History</button>

     </div> 
 
 
</div>
     
    <?php include 'includes/footer.php' ?>

</body>

</html>

