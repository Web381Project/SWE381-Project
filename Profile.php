<?php
require_once('core/init.php');
session_start();
if(isset($_SESSION['ID'])==false){
header('location:Home.php');
}
if(isset($_POST["logOut"])) {
@session_start();
session_destroy();
 echo "<script>alert(You have signed out successfuly!')</script>";

}



if(isset($_POST["add"])) {

$id = $_SESSION['ID'];
    
if($_POST['newCard']!='') {      
$credit=$_POST['newCard'];
$query = "INSERT INTO CreditCard(userID,credit) VALUES ('$id','$credit')"; 
   
} 
    

if($_POST['newAdress']!='') {      
$address=$_POST['newAdress'];
$query = "INSERT INTO ShippingAdress(userID,adress) VALUES ('$id','$address')"; 
   
} 

        
    
    
 if (mysqli_query($db,$query)) {
   echo "<script>alert('Added!');
     window.location.href='Profile.php';</script>";
} else {
     echo "<script>alert('Not Added!');
     window.location.href='Profile.php';</script>";
 }   
    
    

}




if(isset($_POST["updateProfile"])) {
    
$email=$_POST['email'];
$name=$_POST['adress'];

$card=$_POST['creditcards'];
$adress=$_POST['name'];
    
if($_POST['name']!='') { 
$query = "UPDATE Users SET Name = '$name' WHERE ID = '".$_SESSION['ID']."' ";
$_SESSION['Name'] = $_POST['name'];
}
    
if($_POST['email']!='') { 
$query = "UPDATE Users SET Email = '$email' WHERE ID = '".$_SESSION['ID']."' ";
$_SESSION['Email'] = $_POST['email'];
}
    
if($_POST['creditcards']!='') { 
$query = "UPDATE CreditCard SET credit = '$card' WHERE ID = '".$_SESSION['ID']."' ";
}
    
if($_POST['adress']!='') { 
$query = "UPDATE Users SET Email = '$adress' WHERE ID = '".$_SESSION['ID']."' ";
}    
    
       
if (mysqli_query($db,$query)) {
   echo "<script>alert('Updated!!!');
     window.location.href='Profile.php';</script>";
} else {
     echo "<script>alert('Not Updated!!!');
     window.location.href='Profile.php';</script>";
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

<form method="POST" action="Profile.php">
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

<?php 
    
if(!is_admin()){
    
   $id = $_SESSION['ID'];
   $sql = "SELECT * FROM CreditCard WHERE userID='$id'";
   $result = $db->query($sql);

 while($row = mysqli_fetch_assoc($result)){
    
    
    
echo '<h5>Credit Cards:</h5>    
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Credit Card</label>  
  <div class="col-md-4">
  <input id="textinput" name="creditcard" type="text" placeholder="'.$row['credit'].'" class="form-control input-md">
  </div>
</div>';
    
 }
    
   $sql2 = "SELECT * FROM ShippingAdress WHERE userID='$id'";
   $result2 = $db->query($sql2);

    while($row2 = mysqli_fetch_assoc($result2)){
    
    
    
echo '<h5>Address:</h5>    
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Adress:</label>  
  <div class="col-md-4">
  <input id="textinput" name="adress" type="text" placeholder="'.$row2['adress'].'" class="form-control input-md">
  </div>
</div>';
    
    }
    }
?>
    
    
    
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="updateProfile" class="btn btn-primary">Update</button>
  </div>
</div>

</fieldset>      
  </form>
    
    
 <!-- new methoooood -->   
    
<form method="POST" action="Profile.php">
<fieldset>

<?php 
    
if(!is_admin()){
 
?>
<!-- NAME -->
<div class="form-group">
  <h3 style="margin-bottom:19px;">Add Address:</h3>
    
<label class="col-md-4 control-label" for="textinput">Adress:</label>  
  <div class="col-md-4">
  <input id="textinput" name="newAdress" type="text" placeholder="Address" class="form-control input-md">
  </div>
</div>

<!-- EMAIL -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Card:</label>  
  <div class="col-md-4">
  <input id="textinput" name="newCard" type="text" placeholder="card" class="form-control input-md">
  </div>
</div>


 <?php  } ?>
    
    
    
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="add" class="btn btn-primary">Add</button>
  </div>
</div>

</fieldset>
    
        
  </form> 
    
    
    
    
    
    
    
    
    
    
    
    <div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <form method="post" action="signout.php">
    <button id="singlebutton" name="logOut" class="btn btn-primary">Sign out</button>

   </form>
 </div>

  </div>

        <div class="form-group col-md-8" >
                        
            <br>
<?php 
    
if(!is_admin()){
echo '<a href="billing.php"> <button name="updateProfile" class="btn btn-primary">Show Order History</button>';
}
        ?>

     </div> 
 
 
</div>
     
    <?php include 'includes/footer.php' ?>

</body>

</html>