<?php

session_start();
// session_destroy();
require_once('core/init.php');
//$sql ="SELECT * FROM Products WHERE cat_id=2";
$sql ="SELECT * FROM Products ";

// $featured = mysqli_query($db,$sql);
$products = $db->query($sql);


if (isset($_POST["ActionAdd"])) {
	if(isset($_SESSION["shopping_cart"])){
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
			 if(!in_array($_GET["id"], $item_array_id))
			 {
						$count = count($_SESSION["shopping_cart"]);
						$item_array = array(
								 'item_id'			=>     $_GET["id"],
								 'item_name'		=>     $_POST["hidden_name"],
								 'item_price'		=>     $_POST["hidden_price"],
								 'item_quantity'=>     $_POST["quantity"],
								 'item_img'			=> $_POST["hidden_img"]
						);
						$_SESSION["shopping_cart"][$count] = $item_array;
			 }
			 else
			 {
						echo '<script>alert("Item Already Added")</script>';
						echo '<script>window.location="plasterSculptures.php"</script>';
			 }
	}else{
		$item_array = array(
			'item_id' => $_GET["id"] ,
			'item_name' => $_POST["hidden_name"],
			'item_price' =>$_POST["hidden_price"],
			'item_quantity' => $_POST["quantity"],
			'item_img'			=> $_POST["hidden_img"]
		 );
		 $_SESSION["shopping_cart"][0] = $item_array;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Plaster Sculptures</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    
    <script>
function showProd(x) {
    
    
       var php_var = "<?php echo $_GET['cat']; ?>";
    

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("display").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "getProducts.php?M="+x+"&C="+php_var, true);
        xmlhttp.send();
    
}
</script>


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
						<div class="flex-w">
                         <?php  $category= $_GET['cat']; ?>
   
                           <div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting" onchange="showProd(this.value)">
								<option value = "1">Filter By</option>
								<option value = "2">Availabe</option>
								<option value = "3">Discount</option>
								<option value = "4">Categories</option>
								<option value = "5">Price (high -> low)</option>
								<option value = "6">Price (low -> high)</option>
								</select>
							</div>
						</div>
					</div>

					<!-- Product -->
					<div class="row" id="display">
						<?php 
						$con=mysqli_connect("localhost","root","","Mondo");
						// Check connection
						if (mysqli_connect_errno()){
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}

        $category= $_GET['cat'];  
              					 
      	$result = mysqli_query($con,"SELECT * FROM Products WHERE categories LIKE '$category'");

						while($row = $result->fetch_assoc()){
                            
                            echo '<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="'. $row["image"].'" alt="'. $row["title"].'">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product.php?Q='.$row["id"].'" class="block2-name dis-block s-text3 p-b-5">
										'. $row["title"].'
									</a>

									<span class="block2-price m-text6 p-r-5">';
                                    
                        if($row["disc"]>0){             
                            echo '<strike>'. $row["price"].'$'.'</strike>'.($row["price"]-$row["price"]*$row["disc"].'$');
                        } else {
                            echo $row["price"].'$';
                        }                
                                    
                                    
				            echo '</span>
								</div>
							</div>
						</div>';
                                
                                
                        
                            
                            
					}
					mysqli_close($con);
					?> 
					</div>

				</div>
			</div>
		</div>
	</section>


 <!--Footer-->
<?php include 'includes/footer.php' ?>




<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
