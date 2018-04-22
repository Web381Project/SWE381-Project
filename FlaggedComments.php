<?php
require_once('core/init.php');



 function getFlaggedComments($db){
     
  $sql = "SELECT * FROM Comments WHERE flagged=1";
    $result = $db->query($sql);
     
     
      if (!$result)
    {
        
     echo "<p>There's No Flagged Comments!</p>";
        
    } else {
     
     
    while($row = mysqli_fetch_assoc($result)){
        echo "<div class='comment-box'><p>";
        echo $row['ID']."<br>";
        echo $row['date']."<br><br>";
        echo nl2br($row['comment'])."<br>";
        echo "</p>
            <form class='flag-form' method='POST' action='".commentDelete($db)."'>
            <input type='hidden' name='commentID' value='".$row['commentID']."'>
            <button type='submit' name='commentDelete'>Delete</button>
            </form>
        
        </div>";
        
    }       
      }
        
    }

function commentDelete($db){
    if(isset($_POST['commentDelete'])){
        $commentID = $_POST['commentID'];
        
        $sql ="DELETE FROM Comments WHERE commentID='$commentID'";
        $result = $db->query($sql);
        
  if ($result) {
   echo "<script>alert('Comment deleted')</script>";
}
 else {
     echo "<script>alert('comment not deleted!')</script>";
 }
    }
}


?>

<html lang="en">
<head>
	<title>Wood Sculptures</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="pageHeader">

    <?php include 'includes/navigation.php'; ?>   
  
	</header>

    
  <div style="margin: 10% 0 10% 30%;">
<p  style="font-size: 34px;">Flagged Comments:</p>        
    
    <?php
    
    getFlaggedComments($db);
    
    echo "</div>";
    
    ?>
    
   </div>
  
    

 <!--Footer-->
<?php include 'includes/footer.php' ?>




<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
