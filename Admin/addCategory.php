<?php
require_once('../core/init.php');
include('../functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Wood Sculptures</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../images/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
   
    
</head>
<body class="animsition">

	<!-- Header -->
	<header class="pageHeader">
		<!-- Header desktop -->
	       <nav>
                   <div class="row">
                       <ul class="main-nav">


                           <li><a href="home.html">Home</a></li>
                           <li><a href="plasterSculptures.html">Plaster Sculptures</a></li>
                           <li><a href="woodSculptures.html">Wood Sculptures</a></li>
                           <li><a href="paintings.html">Paintings</a></li>
                           <li><a href="addProduct.html">New Product</a></li>
                           <li><a href="addCategory.html">New Category</a></li>
                           <li><a href="manageproducts.html">Manage Products</a></li>
                           
                           <!-------- i linked the register page her---> 
                           
                           <li style="float: right"><a href="signin.html"><i class="fas fa-user"></i></a></li>                 

                           <li style ="float: right"><div class="topnav">
                          <div class="search-container">

                          <form action="/action_page.php">
                         <input type="text" placeholder="Search.." name="search">
                        <i class="fa fa-search"></i>
                          </form>
                           </div>
                          </li>
                         </div>


                       </ul>   
                       
                
              
                     </div>

                 </nav>
        
      
	</header>

    
    <div class="form">
        
          <p style="font-size: 34px; margin-top:10%;"> Add Category: </p>  
  
        
  <form name="categoryform" action="add-cat.php" method="GET" id="categoryform">
         <table>
                <tr>
                    <td>Category name:</td>
                     <td><input type="text" name="newCategory"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Add"></td>
                </tr>
                    </table>
</form>
  
    <p style="font-size: 34px; margin-top:5%;"> Categories: </p> 

     <?php printCategories($db); ?>      
        
    </div>
    

 <!--Footer-->
<?php include '../includes/footer.php' ?>




<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
