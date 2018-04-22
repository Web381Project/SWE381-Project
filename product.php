<?php
require_once('core/init.php');


//
//
// GET RATING
//
//

function UpdateProductRating($db){
    
    
    
}




function getUserId($db){
    
    if(isset($_SESSION['ID'])){
        
        $id = $_SESSION['ID'];

        
    $getUser = "SELECT * FROM Users WHERE ID='$id'";
    $Userresult = $db->query($getUser);  
        
        while($row = mysqli_fetch_assoc($Userresult)){
            
            $user = $row['Name'];

         }
        return $user;
        
    } else {
        return "Anonymous";
    }   
    
}

function setComments($db) {
  
    $Pid= $_GET['Q'];
   
    
    if(isset($_POST['commentSubmit'])) {
        
       // $productID = $_GET['$productID'];       
        $userID = $_POST['userID'];
        $date = $_POST['date'];
        $comment = $_POST['comment'];

        $sql = "INSERT INTO Comments (ID,date,comment,productID) VALUES ('$userID','$date','$comment','$Pid')";
        $result = $db->query($sql);
    }
}

function getComments($db){
    
    
    $Pid= $_GET['Q'];  
    
    $sql = "SELECT * FROM Comments WHERE productID='$Pid' ORDER BY date DESC";
    $result = $db->query($sql);
    
    if(!$result){
        
              echo 'no comments';
  
    } else {


    while($row = mysqli_fetch_assoc($result)){
        echo "<div class='comment-box'><p>";
        echo $row['ID']."<br>";
        echo $row['date']."<br><br>";
        echo nl2br($row['comment'])."<br>";
        echo "</p>
            <form class='flag-form' method='POST' action='".flagComment($db)."'>
            <input type='hidden' name='commentID' value='".$row['commentID']."'>
            <button type='submit' name='commentFlag'><i class='fa fa-flag'></i></button>
            </form>
        
        </div>";
    }
    }
    
}

function flagComment($db){
    if(isset($_POST['commentFlag'])){
        $commentID = $_POST['commentID'];
        
        $sql ="UPDATE Comments SET flagged=1 WHERE commentID='$commentID'";
        $result = $db->query($sql);
    }
}


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
								<?php 
                                $Pid= $_GET['Q'];
                                 $proinfo = mysqli_query($db,"SELECT * FROM Products WHERE id='$Pid'");
                                    
                                
                                while($row = $proinfo->fetch_assoc()){
    
                                
                                echo '<img src="'. $row['image'].'" alt="'. $row['title'].'">'; }
                                ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					<?php 
                                $Pid= $_GET['Q'];
                                 $proinfo = mysqli_query($db,"SELECT * FROM Products WHERE id='$Pid'");
                                    
                                
                                while($row = $proinfo->fetch_assoc()){
                                    echo $row['title'];
                                     }
                    ?>
    
				</h4>

				<span class="m-text17">
					<?php 
                                $Pid= $_GET['Q'];
                                 $proinfo = mysqli_query($db,"SELECT * FROM Products WHERE id='$Pid'");
                                                              
                                while($row = $proinfo->fetch_assoc()){
                                    echo $row['price'].'$';
                                     }
                    ?>
				</span>
 
<?php
                
   if(isset($_POST['Rate'])){
    
$selected_val = (int)$_POST['rating'];  // Storing Selected Value In Variable        
    
if(isset($_SESSION['ID'])){
$userId = $_SESSION['ID'];   
$Pid= $_GET['Q'];  
    
    
    $sql = "SELECT * FROM product_rating WHERE product='$Pid' AND userID='$userId'";
    $result = $db->query($sql);  
    
    if($result->num_rows == 0){
    $sql = "INSERT INTO product_rating (product,rating,userID) VALUES ('$Pid','$selected_val','$userId')";
    $result = $db->query($sql);
        
    } else {   
        $sql ="UPDATE product_rating SET rating='$selected_val' WHERE product='$Pid' AND userID='$userId'";
        $result = $db->query($sql);       
    }
     
  
 } 
    
    
}
                
                
function setRate($db,$sum){

$Pid= $_GET['Q'];  

  $sql = "SELECT * FROM Products WHERE id='$Pid'";
 $result = $db->query($sql);  
    
     while($row = mysqli_fetch_assoc($result)){
         
        $sql ="UPDATE Products SET rating='$sum' WHERE product='$Pid'";

    }
    
     echo "<br>".'Product Rate:'.$sum;
              
                
}
                

function getRates($db){

    $Pid= $_GET['Q'];  
    
    $sql = "SELECT * FROM product_rating WHERE product='$Pid'";
    $result = $db->query($sql);  
       

$sum = 0;
$count = 0;

    
    while($row = mysqli_fetch_assoc($result)){
        
        $sum+= (int)$row['rating'];
        $count = $count+1;

    }
    
    if($count>0){
    $sum = $sum/$count;
    }
    
    setRate($db,$sum);
     
}
                
                
                
 function YourRate($db){
  
 if(isset($_SESSION['ID'])){
        
    $id = $_SESSION['ID'];
   
     
    $Pid= $_GET['Q'];  


    $sql = "SELECT * FROM product_rating WHERE product='$Pid' AND userID='$id'";
    $result = $db->query($sql);  
     
   while($row = mysqli_fetch_assoc($result)){
        echo "<br>".'Your Rate:'.$row['rating'];
    }  
     
 }
    
}
             
                
    
   echo "<p>".getRates($db)."</p>";
   echo "<p>".YourRate($db)."</p>";

   echo "<p>Rate:</p>";
    
    echo "<form method='post' action=''>              
   <select name='rating'>
   <option value='1'>1</option>
  <option value='2'>2</option>
  <option value='3'>3</option>
  <option value='4'>4</option>
  <option value='5'>5</option>
</select> 
<input type='submit' name='Rate' value='Rate' />
 </form>";  
 
?>

				<p class="s-text8 p-t-10">
					<?php echo $row['description'] ?>
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
					<span class="s-text8">Categories: <?php echo $row['description'] ?> </span>
				</div>

                
			</div>
		</div>
	</div>

    <?php
    
   echo "<div class='comment-form'>";
    
    echo "<form method='POST' action='".setComments($db)."'>
         <input type='hidden' name='userID' value='".getUserId($db)."'>
         <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
         <textarea name='comment'></textarea><br>
         <button type='submit' name='commentSubmit'>Comment</button>
         </form>";
    
     getComments($db);
    
    echo "</div>";
    
    ?>
    
   

 <!--Footer-->
<?php include 'includes/footer.php' ?>


</body>
</html>
