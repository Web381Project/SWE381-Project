<?php 

require_once('core/init.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shipping Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
     <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
                <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


<!--===============================================================================================-->
</head>
<body class="animsition">

  <!-- Header -->
  <header class="header1">

       <?php include 'includes/navigation.php'; ?>   
        
  </header>


<!--- Include the above in your HEAD tag -->

<div class="container">
  <form class="form-horizontal" role="form">
    <fieldset>
      <legend>Shipment and Credit Card Information</legend>
    </fieldset>
  </form>
</div>   




<div class="container">
      <div class="form-group">
        <label class="col-sm-3 control-label" for="expiry-month">SELECT</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-3">




              <form method="get" action="AddOrder.php" >
             <select method="post" class="form-control" name="address"  required>

                <?php 
            $con=mysqli_connect("localhost","root","","Mondo");
            // Check connection
            if (mysqli_connect_errno()){
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

             $idx = $_SESSION['ID'];
             $xxx = "SELECT * FROM ShippingAdress WHERE userID=$idx";
        $resultx = mysqli_query($con,$xxx);

        if(mysqli_num_rows($resultx)>0){

            while($row = $resultx->fetch_assoc()){
              echo '<option value="'.$row['adress'].'">'.$row['adress'].'</option>';
          }
        }
          else{
          echo '<option value="">NO SHIPPING ADRESS. ADD IT IN PROFILE PAGE</option>';
          }

          mysqli_close($con);
          ?> 
              </select> 
            </div>
            <div class="col-xs-3">
              <select class="form-control" method="post" name="credit"  required>
                <?php 
            $con=mysqli_connect("localhost","root","","Mondo");
            // Check connection
            if (mysqli_connect_errno()){
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

             $idx = $_SESSION['ID'];
        $result = mysqli_query($con,"SELECT * FROM CreditCard WHERE userID LIKE $idx");
        if(mysqli_num_rows($result)>0){

            while($row = $result->fetch_assoc()){
 echo '<option value="'.$row['credit'].'">'.$row['credit'].'</option>';
          }
        }
          else{
          echo '<option value="">NO SHIPPING ADRESS. ADD IT IN PROFILE PAGE</option>';
          }

          mysqli_close($con);
          ?> 


              </select>
            </div>
<?php 


 
?>

            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-9">
            <input  type="submit" class="btn btn-success" value="Pay Now"/>
              </div>
              </div>
              <?php 
                
                
                ?>

</form>

    
          </div>
        </div>
      </div>
</div>   
    



 <!--Footer-->
<?php include 'includes/footer.php' ?>




</body>
</html>