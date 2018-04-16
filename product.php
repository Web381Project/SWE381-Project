<?php
require_once('core/init.php');
include('comments.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Detail</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
     
<!--===============================================================================================-->
</head>
    
    
<body class="animsition">

	<!-- Header -->
	<header class="pageHeader">

	   <?php include 'includes/navigation.php'; ?>   
        
	</header>


	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
						<div class="item-slick3" data-thumb="images/thumb-item-01.jpg">
							<div class="wrap-pic-w">
								<img src="images/product-detail-01.jpg" alt="IMG-PRODUCT">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					Painting
				</h4>

				<span class="m-text17">
					$22
				</span>

				<p class="s-text8 p-t-10">
					Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
				</p>

				<!--  -->
				<div class="p-t-33 p-b-60">
					<div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">
							Size
						</div>

                <div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
				    <select class="selection-2" name="size">
				        <option>Choose an option</option>
				        <option>30x20</option>
                        <option>60x80</option>
				        <option>200x100</option>
				    </select>
						</div>
				</div>


					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">

							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</div>
						</div>
					</div>
				</div>

				<div class="p-b-45">
					<span class="s-text8">Categories: Paintings, Design</span>
				</div>

                
			</div>
		</div>
	</div>

    <?php
    
   echo "<div class='comment-form'>";
    
    echo "<form method='POST' action='".setComments($db)."'>
         <input type='hidden' name='userID' value='Anonymous'>
         <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
         <textarea name='comment'></textarea><br>
         <button type='submit' name='commentSubmit'>Comment</button>
         </form>";
    
     getComments($db);
    
    echo "</div>";
    
    ?>

   
  
<!--
  <div class="detailBox">
    <div class="titleBox">
      <label>Comment Box</label>
    </div>
    <div class="actionBox">
        <ul class="commentList">
            <li>
                <div class="commentText">
                    <p>Name</p>
                    <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span><span><i class="fas fa-flag"></i></span>

                </div>
            </li>
        </ul>
        <form class="form-inline" role="form">
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Your comments" />
            </div>
            <div class="form-group">
                <button class="btn btn-default">Add</button>
            </div>
        </form>
    </div>
</div>  
-->
    

 <!--Footer-->
<?php include 'includes/footer.php' ?>


</body>
</html>
