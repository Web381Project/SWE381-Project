<?php
require_once('core/init.php');
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT-AWESOME STYLE SHEET FOR BEAUTIFUL ICONS -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- CUSTOM STYLE CSS -->
    	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    
    <style type="text/css">

.alert-info{
    background-color: white;
    
}
</style>
</head>
<body>
   

    <!-- NAVBAR CODE END -->
<header class="pageHeader">
		<!-- Header desktop -->
	            <?php include 'includes/navigation.php'; ?>     
	</header>
    
    
    

    <div class="container">
        <section style="padding-bottom: 50px; padding-top: 50px;">
            <div class="row">
                <div class="col-md-4">
                    <img src="sculpt.jpg" class="img-rounded img-responsive" />
                    <br />
                    <br />
                    
                    <br /><br/>
                </div>
                <div class="col-md-8">
                    <div class="alert alert-info" style="border-color: orange">
                        <h2><font color ="black" > User Info : </font></h2>
                        <br>
                        <h4> <font color ="black" > First Name:</font> </h4>
                        <p>
                             
                        </p>
                        <br>
                          <h4> <font color ="black" >Last name:</font> </h4>
                        <p>
                           
                        </p>

                        <br>
                          <h4> <font color ="black" > First Name:</font> </h4>
                        <p>
                          
                        </p>





                    </div>
                    


                    <div class="form-group col-md-8" >
                        
                        <br>
                        <a href="#" class="btn btn-warning" style="background-color: silver "> Sign Out</a>
                                                <a href="billing.html" class="btn btn-warning" style="background-color: silver ">Show Order History</a>

                    </div>
                </div>
            </div>
            <!-- ROW END -->


        </section>
        <!-- SECTION END -->
    </div>
    <!-- CONATINER END -->

    <!-- REQUIRED SCRIPTS FILES -->
    <!-- CORE JQUERY FILE -->
    
    <?php include 'includes/footer.php' ?>

    
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- REQUIRED BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
</body>

</html>
