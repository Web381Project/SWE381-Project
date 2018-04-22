<?php require_once('core/init.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Wood Sculptures</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
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

                            <div class="form">
                              
            <form name="form1" action="" method="POST" enctype="multipart/form-data">
              <table>
                <tr>
                   <td>Product Name </td><td><input type="text" name="productName"></td>
                </tr>
                <tr>
                   <td>Product Price </td><td><input type="text" name="price"></td>
                </tr>
				<tr>
                  <td>Product Quantity </td><td><input type="text" name="pqty"></td>
                </tr>
				<tr>
                   <td>Product Discount </td><td><input type="text" name="pdiscnt"></td>
                </tr> 
				<tr>
                   <td>Product Category </td>
                       <td>
                        <select name="pcategory">
                                                         
                        <?php $sql = "SELECT * FROM Categories";
                        $result = $db->query($sql);

                            while($row = mysqli_fetch_assoc($result)){
                            echo '<option value="' .$row['id']. '">' .$row['category']. '</option>';
    
                            }                            
                            ?>
                            
                                                         
                                                         
                        </select>
                                            </td>
                                             </tr>
						  
						                     <tr>
                                                 <td>Product Image </td>
                                                 <td>  	<input type="file" name="image"></td>
                                             </tr>
						  
                                             <tr>
                                                 <td>Product Description </td>
                                                 <td><textarea cols="15" rows="10" name="pdesc"></textarea></td>
                                             </tr>
						  
						                     <tr>
                                                 <td>Product Size </td>
                                                 <td><input type="text" name="psize"></td>
                                             </tr>
						   
                                             <tr>
                                                 <td colspan="2" align="center"><input type="submit" name="addProduct" value="upload"></td>
                                             </tr>

                                        </table>
				                </form>
								
<?php
if(isset($_POST["addProduct"])){
    

  	$image = $_FILES['image']['name'];
  	$target = "product-imgs/".basename($image);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		echo 'Image uploaded successfully';
  	}else{
  		echo 'Failed to upload image';
  	}
    
//$target_dir = "product-imgs/";
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);  
//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
//    
  $productName = $_POST['productName']; 
  $price = $_POST['price'];
  $description = $_POST['pdesc'];
  $size = $_POST['psize'];
  $quantity = $_POST['pqty'];
  $discount = $_POST['pdiscnt'];
  $cat = $_POST['pcategory'];
    
    

    $sql ="INSERT INTO Products(title, price, image, description, size, Quantity, disc, categories) VALUES ('$productName','$price','$target','$description','$size','$quantity','$discount','$cat')";
  
if (mysqli_query($db,$sql)) {
   echo "<script>alert('Added!');
     window.location.href='productList.php';</script>";
}
 else {
     echo "<script>alert('Not Added!');
     window.location.href='addProduct.php';</script>";
 } 
}
?>
                            </div>
    
    
    

 <!--Footer-->
 <?php include 'includes/footer.php' ?>





<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
