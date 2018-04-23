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
$user_id = $_SESSION['ID'];
//$con = mysqli_connect('localhost','root','','Mondo');
$orders_list ="SELECT * FROM orders WHERE ID='$user_id'";
$query = mysqli_query($db,$orders_list);
if ($query && mysqli_num_rows($query) > 0) { ?>
	<div class="container">
			<!-- Cart item -->
					<table class="table-shopping-cart">
						<tr class="table-head">
							
							<th class="column-1">OrderID</th>
							<th class="column-2">shipped Date</th>
							<th class="column-3">Address</th>
							<th class="column-4">Status</th>
							<th class="column-5">Total</th>
					<th class="column-6" style="color:white">Reetturnnnn </th>
					<th class="column-7" style="color:white">Reettunnn </th>		
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
								<?php if($row['status']=="Ordered" || $row['status']=="Processed") {?>
							<td class="column-6"> <a href="Return.php?orderNo=<?php echo $row['orderNo']; ?> " onclick="return  confirm('Are you sue do you want to return this order?')"><button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1"> Return</button> </td> <?php 
							}?>
							<?php if($row["status"]=='Shipped' || $row["status"]=='Delivered') { ?>
							<th class="column-6" style="color:white">Reetturnnnn </th><?php 
							}?>
							<td class="column-7"> <a href="Tracking.php?status=<?php echo $row['status']."&&orderNo=".$row['orderNo']."&&shippedDate=".$row["shippedDate"]."&&deliveryAddress=".$row['deliveryAddress']; ?> "><button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1"> Tracking </button> </td>
						</tr>
				
					</table>
                    
                    
                    
            
         
                
        
        
        
    </div>
   
		<?php }}
		else { ?>
							<div class="cart bgwhite p-t-70 p-b-100" style="margin-bottom: 0%">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
<tr class="table-head">
<td class="column-1" style="padding-left: 530px;"> <?php echo	"No Orders"?></td>
</tr>
</table>
</div>        
</div>
</div>
        
        	<?php
								} ?>


 <!--Footer-->
<?php include 'includes/footer.php' ?>




</body>
</html>

