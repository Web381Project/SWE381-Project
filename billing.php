<?php
require_once('core/init.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shipping Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    
<!--===============================================================================================-->


</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
	
     <?php include 'includes/navigation.php'; ?>     
        
	</header>


<!------ Include the above in your HEAD tag ---------->

<?php 

$user_id =$_SESSION["ID"];
//$con = mysqli_connect('localhost','root','','Mondo');
$orders_list ="SELECT * FROM ORDERS WHERE ID='$user_id'";
$query = mysqli_query($db,$orders_list);
if (mysqli_num_rows($query) > 0) { ?>
	<div class="container">
			<!-- Cart item -->
					<table class="table-shopping-cart">
						<tr class="table-head">
							
							<th class="column-1">OrderID</th>
							<th class="column-2">Date</th>
							<th class="column-3">Address</th>
							<th class="column-4">Status</th>
							<th class="column-5">Total</th>
					
							
						</tr>
				
					</table>

        
    </div>
   

<?php
while ($row=mysqli_fetch_array($query)) {
?>
		<div class="container">
			<!-- Cart item -->
					<table class="table-shopping-cart">
						
		<tr class="table-row">
							<td class="column-1"><a href="OrderItem.php?orderNo=<?php echo $row['orderNo']; ?>"><?php echo $row["orderNo"]; ?></td>
							<td class="column-2"><?php echo $row["shippedDate"]; ?></td>
							<td class="column-3"><?php echo $row["deliveryAddress"]; ?></td>
							<td class="column-4"><?php echo $row["status"]; ?></td>
							<td class="column-5"><?php echo $row["total"]; ?></td>
								<?php if($row['status']!="Shipped" && $row['status']!="Delivered") {
							 ?>
							 <td class="column-6"> <a href="OrderItem.php?orderNo=<?php echo $row['orderNo']; ?>"> Return </td> <?php 
							}?>
							<?php if($row["status"]=='Shipped' || $row["status"]=='Delivered') { ?>
							<td class="column-6"></td><?php 
							}?>
						</tr>
				
					</table>
                    
                    
                    
            
         
                
        
        
        
    </div>
   
		<?php
								}
							}
						?>


 <!--Footer-->
<?php include 'includes/footer.php' ?>




</body>
</html>
