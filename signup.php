<?php
require_once('core/init.php');
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">       
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
    </head>

    <body>
        
        <header class="pageHeader">
        
       <?php include 'includes/navigation.php'; ?>
               
        </header>

        <!-- Top content -->
                        	
                   <div class="row2">
                            <div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign Up Now</h3>
	                        		</div>
	                        		

	                            </div>
	                            <div class="form-bottom">
<form role="form" action="signUpX.php" method="post" class="login-form">
				                    	<div class="form-group">
                                            <label class="sr-only" for="form-username">Username</label>
                                            <input type="text" name="form-username" placeholder="Username" required>
				                        </div>
				                        <div class="form-group">
                                            <label class="sr-only" for="form-password">Password</label>
                                            <input type="password" name="form-password" placeholder="Password" required>
				                        </div>
 				                        <div class="form-group">
                                            <label class="sr-only" for="form-password">Email</label>
                                            <input type="text"  placeholder="Email" name="form-email" required>
				                        </div>                                       
                                        
         <button type="submit" style="width: 100px;" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1">Sign Up</button>
                                        				                    
</form>
			                    </div>
		                    </div>
		                

	                        
                        </div>
                        	
                    

        <!-- Footer -->
<?php include 'includes/footer.php' ?>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>