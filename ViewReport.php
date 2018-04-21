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
						<div class="cart bgwhite p-t-70 p-b-100" style="margin-bottom: 0%">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
<tr class="table-head">
<td class="column-1" style=style="padding-left: 440px; text-decoration: underline;> <?php echo	"Existing Products "?></td>
</tr>
</table>
</div>        
</div>
</div>
       



<?php 
if($_GET['order']=="SALES")
$orders_list ="SELECT * FROM Products WHERE SALES>'0' ORDER BY SALES DESC";
else
$orders_list ="SELECT * FROM Products WHERE refuned=='ture' ";


$query = mysqli_query($db,$orders_list);
if (mysqli_num_rows($query) > 0) {
while ($row=mysqli_fetch_array($query)) {
?>
	<div class="cart bgwhite p-t-70 p-b-100" style="margin-bottom: 0%">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<td class="column-1"></td>
							<th class="column-2">item ID</th>
							<th class="column-4">Sales</th>
							<th class="column-4">price</th>
							
			
							
							
						</tr>
						
		<tr class="table-row">
		<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="images/item-10.jpg" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2"><?php echo $row["id"]; ?></td>
							<td class="column-2"><?php echo $row["SALES"]; ?></td>
							<td class="column-4"><?php echo $row["price"]; ?></td>
						
						</tr>
			
					</table>
                    
                    
                    
				</div>        
			</div>
            
         
                
        </div>
        
        
        
    </div>
   
		<?php
								}
							} else { ?>
							<div class="cart bgwhite p-t-70 p-b-100" style="margin-bottom: 0%">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
<tr class="table-head">
<td class="column-1" style="padding-left: 450px;"> <?php echo	"No Products"?></td>
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
