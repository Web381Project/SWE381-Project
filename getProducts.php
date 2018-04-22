<?php

$selection = intval($_GET['M']);
$cat = $_GET['C'];

$con=mysqli_connect("localhost","root","","Mondo");
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
						
      switch ($selection){
      	case "2":
      	$result = mysqli_query($con,"SELECT * FROM Products WHERE categories LIKE $cat AND quantity <> 0");
      	break;
      	case "3":
      	$result = mysqli_query($con,"SELECT * FROM Products WHERE categories LIKE $cat AND disc <> 0");
      	break;
      	case "5":
      	$result = mysqli_query($con,"SELECT * FROM Products WHERE categories LIKE $cat ORDER BY price DESC");
      	break;
      	case "6":
      	$result = mysqli_query($con,"SELECT * FROM Products WHERE categories LIKE $cat ORDER BY price ASC");
      	break;
      	case "4":
      	$result = mysqli_query($con,"SELECT * FROM Products");
      	break;
      	default:
      	$result = mysqli_query($con,"SELECT * FROM Products WHERE categories LIKE $cat");

        }

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

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Add to Cart
											</button>
										</div>
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