<?php
require_once('core/init.php');

?>

	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="css/track.css">
    
<!--===============================================================================================-->

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shipping Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
	
     <?php include 'includes/navigation.php'; ?>     
        
	</header>
	<div class="container">
	<table class="table-shopping-cart">
						
		<tr class="table-row">
					
					</table>
	<div class="container">
			<!-- Cart item -->
					<table class="table-shopping-cart">
						<tr class="table-head">
							
							<th class="column-1">Tracking</th>
							
						</tr>
				
					</table>

    </div>
	<?php
	require_once('core/init.php');
     $status = $_GET['status'];
         $orderNo = $_GET['orderNo'];
         $shippedDate=$_GET['shippedDate'];
         $deliveryAddress=$_GET['deliveryAddress'];
         
	switch($status){
	case"Ordered":?>
	
	
		<div style='padding-left: 200px; padding-bottom: 50px;'>
	
	<ol class="progtrckr" data-progtrckr-steps="5">
    <li class="progtrckr-done">Ordered</li><!--
 --><!--
 --><li class="progtrckr-todo">Processed</li><!--
 --><li class="progtrckr-todo">Shipped</li><!--
 --><li class="progtrckr-todo">Delivered</li>
</ol>
	
	</div>
	<?php break;
	case"Processed":?>
			<div style='padding-left: 200px; padding-bottom: 50px;'>
	
	<ol class="progtrckr" data-progtrckr-steps="5">
    <li class="progtrckr-done">Ordered</li><!--
 --><!--
 --><li class="progtrckr-done">Processed</li><!--
 --><li class="progtrckr-todo">Shipped</li><!--
 --><li class="progtrckr-todo">Delivered</li>
</ol>
	
	</div>
	<?php break;
	case"Shipped":?>
				<div style='padding-left: 200px; padding-bottom: 50px;'>
	
	<ol class="progtrckr" data-progtrckr-steps="5">
    <li class="progtrckr-done">Ordered</li><!--
 --><!--
 --><li class="progtrckr-done">Processed</li><!--
 --><li class="progtrckr-done">Shipped</li><!--
 --><li class="progtrckr-todo">Delivered</li>
</ol>
	
	</div>
	<?php 
	break; 
	case"Delivered":?>
				<div style='padding-left: 200px; padding-bottom: 50px;'>
	
	<ol class="progtrckr" data-progtrckr-steps="5">
    <li class="progtrckr-done">Ordered</li><!--
 --><!--
 --><li class="progtrckr-done">Processed</li><!--
 --><li class="progtrckr-done">Shipped</li><!--
 --><li class="progtrckr-done">Delivered</li>
</ol>
	
	</div>
	
	
	<?php } ?>
	
		</tr>
				
					</table>
	<div class="container">
			<!-- Cart item -->
					<table class="table-shopping-cart">
						<tr class="table-head">
							
							<th class="column-1">OrderID</th>
							<th class="column-2">Status</th>
							<th class="column-3">shipped Date</th>
							<th class="column-4">Delivery Address</th>
						</tr>
				
					</table>

    </div>

	
	</div>
		<div class="container">
			<!-- Cart item -->
					<table class="table-shopping-cart">
						
		<tr class="table-row">
		<td class="column-1"><?php echo  $orderNo ?></td>
			<td class="column-2"><?php echo $status ?></td>
			<td class="column-3"><?php echo $shippedDate ?></td>
			<td class="column-4"><?php echo $deliveryAddress ?></td>
							</tr>
				
					</table>
                    

        
    </div>

	<?php include 'includes/footer.php' ?>




</body>
</html>
