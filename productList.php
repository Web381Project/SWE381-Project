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
?> 
  <div class="form">
     <?php
	  $res=mysqli_query($link,"SELECT * FROM Products");
	  echo"<table border='1'>";
	  echo"<tr>";
	  echo"<th>"; echo "Product image"; echo"</th>";
	  echo"<th>"; echo "Product name"; echo"</th>";
	  echo"<th>"; echo "Product price"; echo"</th>";
	  echo"<th>"; echo "Product quantity"; echo"</th>";
	  echo"<th>"; echo "Product discount"; echo"</th>";
	  echo"<th>"; echo "Product category"; echo"</th>";
	  echo"<th>"; echo "Product size"; echo"</th>";
	  echo"<th>"; echo "Delete"; echo"</th>";
	  echo"<th>"; echo "Edit"; echo"</th>";
	  echo"</tr>";
	  
	  
	  while($row=mysqli_fetch_array($res))
	  {
	  echo"<tr>";
	  echo"<td>"; ?> <img src="<?php echo $row["image"]; ?>" height="100" width="100"<?php echo"</td>";
	  echo"<td>"; echo $row["title"]; echo"</td>";
	  echo"<td>"; echo $row["price"].'$'; echo"</td>";
	  echo"<td>"; echo $row["Quantity"]; echo"</td>";
	  echo"<td>"; echo $row["disc"]; echo"</td>";
	  echo"<td>"; echo $row["categories"]; echo"</td>";
	  echo"<td>"; echo $row["size"]; echo"</td>";
	  echo"<td>"; ?> <a href="delete.php?id=<?php echo$row["id"]; ?>">Delete</a> <?php echo "</td>";
	  echo"<td>"; ?> <a href="UpdateProduct.php?id=<?php echo $row["id"]; ?>">Edit</a> <?php echo"</td>";
	  echo"</tr>";
	  }
	  echo"</table>";
	  ?>
         
 </div>
    
    
    

 <!--Footer-->
<?php include 'includes/footer.php' ?>




<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
