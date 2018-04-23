<?php
session_start();
require_once('core/init.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>Cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

	<!-- Header -->
	<header class="header1">
         <?php include 'includes/navigation.php'; ?>
	</header>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100" style="margin-bottom: 5%">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Product</th>
							<th class="column-3">Price</th>
							<th class="column-4 p-l-70">Quantity</th>
							<th class="column-5">Total</th>
						</tr>



            <?php
                if(!empty($_SESSION["shopping_cart"])){
                $total = 0;
                foreach($_SESSION["shopping_cart"] as $keys => $values)
                {
             ?>
						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="<?php echo $values["item_img"]; ?>" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2"><?php  echo $values["item_title"]; ?></td>
							<td class="column-3">$<?php  echo $values["item_price"]; ?></td>
							<td class="column-4"><?php echo $values["item_quantity"]; ?></td>
              <?php $multi =  $values["item_quantity"] *  $values["item_price"] ?>

							<td class="column-5"> $<?php echo $multi ?></td>
						</tr>
            <?php
            }
              }
             ?>

					</table>



				</div>
			</div>

             <div class="size11 trans-0-1" style="float:right; margin-top: 20px;">
					<!-- Button -->
				<a href="shippingInfo.php" ><button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1">
						Proceed to Checkout
                    </button></a>
				</div>

        </div>



    </section>

 <!--Footer-->
<?php include 'includes/footer.php' ?>



</body>
</html>