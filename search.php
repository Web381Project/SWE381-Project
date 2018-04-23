<?php
require_once('core/init.php');

$query = $_GET['query'];
$search_results ="SELECT * FROM Products
          WHERE (`title` LIKE '%".$query."%') OR (`description` LIKE '%".$query."%')";
 $products = $db->query($search_results);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Search</title>
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
	<header class="pageHeader">
		<!-- Header desktop -->
	   <?php include 'includes/navigation.php'; ?>
	</header>



				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">

						<span class="s-text8 p-t-5 p-b-5">
							<!-- Showing 1–12 of 16 results -->
						</span>
					</div>

					<!-- Product -->
					<div class="row">

             <?php  foreach($products as $product){ ?>
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="<?php echo $product['image'] ?>" alt="<?php echo $product['title']; ?>">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

									</div>
								</div>

								<div class="block2-txt p-t-20">
                                <a class="block2-name dis-block s-text3 p-b-5" href="product.php?Q=<?php echo $product["id"]; ?>" >    										
										<?php echo $product['title']; ?>
									</a>

									<span class="block2-price m-text6 p-r-5">
										<?php echo '$'.$product['price']; ?>
									</span>
								</div>
							</div>
						</div>
            <?php } ?>



					</div>

				</div>



 <!--Footer-->
<?php include 'includes/footer.php' ?>




<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
