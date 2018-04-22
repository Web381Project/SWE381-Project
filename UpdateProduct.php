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
    
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"Mondo");
$id=$_GET["id"];
$res=mysqli_query($link,"SELECT * FROM Products WHERE id=$id");
while($row=mysqli_fetch_array($res))
 {
	$product_name=$row["title"];
	$product_price=$row["price"];
	$product_qty=$row["Quantity"];
	$product_discount=$row["disc"];
	$product_category=$row["categories"];
	$product_image=$row["image"];
	$product_desc=$row["description"];
	$product_size=$row["size"];
	
 }
?>
    
  <div class="form">
<form name="form1" action="" method="POST" enctype="multipart/form-data">
                <table>
		                 <tr>
				             <td colspan="2" align="center">
				             <img src="<?php echo $product_image; ?>" height="100" width="100">
				             </td>
				         </tr>
						 
                         <tr>
                             <td>Product Name </td>
                             <td><input type="text" name="pnm" value="<?php echo $product_name; ?>"></td>
                         </tr>
						  
                         <tr>
                             <td>Product Price </td>
                             <td><input type="text" name="pprice" value="<?php echo $product_price; ?>"></td>
                         </tr>
						  
                         <tr>
                             <td>Product Quantity </td>
                             <td><input type="text" name="pqty" value="<?php echo $product_qty; ?>"></td>
                         </tr>
														 
						 <tr>
                             <td>Product Discount </td>
                             <td><input type="text" name="pdiscnt" value="<?php echo $product_discount; ?>"></td>
                         </tr>
						                                 
                         <tr>
                             <td>Product Category </td>
                             <td>
                             <input type="text" name="pcategory" value="<?php echo $product_category; ?>">
                             </td>
                         </tr>
						  
						 <tr>
                             <td>Product Image </td>
                             <td><input type="file" name="pimage"></td>
                          </tr>
						  
                          <tr>
                             <td>Product Description </td>
                             <td><textarea cols="15" rows="10" name="pdesc" value="<?php echo $product_desc; ?>"></textarea></td>
                         </tr>
						  
						 <tr>
                             <td>Product Size </td>
                             <td><input type="text" name="psize" value="<?php echo $product_size; ?>"></td>
                         </tr>
						   
                         <tr>
                             <td colspan="2" align="center"><input type="submit" name="submit1" value="update"></td>
                         </tr>

         </table>
        </form>
         
 </div>
    
    
 <?php
	    if(isset($_POST["submit1"])) 
		{
			$fnm=$_FILES["pimage"]["name"];
			
			
			if($fnm=="")
			{
				mysqli_query($link,"UPDATE Products SET title='$_POST[pnm]',price='$_POST[pprice]',Quantity='$_POST[pqty]',disc='$_POST[pdiscnt]',categories='$_POST[pcategory]',description='$_POST[pdesc]',size='$_POST[psize]' WHERE id=$id");

			}
			else
			{
				$v1=rand(1111,9999);
                $v2=rand(1111,9999);
                $v3=$v1.$v2;
                $v3=md5($v3);
                $fnm=$_FILES["pimage"]["name"];
                $dst="./product_image/".$v3.$fnm;
                $dst1="product_image/".$v3.$fnm;
                move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);
				
				mysqli_query($link,"UPDATE products SET image='$dst1',title='$_POST[pnm]',price='$_POST[pprice]',quantity='$_POST[pqty]',discount='$_POST[pdiscnt]',categories='$_POST[pcategory]',description='$_POST[pdesc]',size='$_POST[psize]' WHERE id=$id");
			}	
			
			
			?>
			<script type="text/javascript">
			window.location="productList.php";
			   </script>

			   <?php
		}
		?>
 <!--Footer-->
<?php include 'includes/footer.php' ?>




<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
