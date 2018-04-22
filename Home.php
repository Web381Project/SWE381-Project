<?php
require_once('core/init.php');

$sql ="SELECT * FROM Products ORDER BY id DESC LIMIT 0,3";
$result = $db->query($sql);

?>

<html lang="en"> <!--Language-->

    <head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- importnat for responsive -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Cinzel+Decorative" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush|Merriweather:700|Pinyon+Script|Poiret+One" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
        
         <title>Mondo Dell'arte</title>

    </head>
 
    <body>      
    <header>
              
      <?php include 'includes/navigation.php'; ?>
        
        <div>
        <center>
            <h1>Mondo Dell'arte</h1>
        </center>
        </div>
      
    </header>    
        
      
        
 
<div class="container">
  <h2 style="text-align:center;">Our Newsletter</h2>  
    
    
   <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:500px; margin: 0 auto 40px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
       
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

        
       <div class="item active">
        <img src="product-imgs/artist.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Van Gogh</h3>
          <p>Artist of the month!</p>
        </div>
      </div>       
        
        
      <div class="item">
        <img src="product-imgs/5.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>The Starry Night</h3>
          <p>Van Gogh</p>
        </div>
      </div>
        
  
    <div class="item">
        <img src="product-imgs/6.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>THE STARRY NIGHT OVER THE RHÔNE</h3>
          <p>Van Gogh</p>
        </div>
      </div>
        
        
    <div class="item">
        <img src="product-imgs/7.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>THE MONA LISA </h3>
          <p>Leonardo da Vinci</p>
        </div>
      </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> 
    
            </div>

        </div>
 <!--Footer-->
<?php include 'includes/footer.php' ?>
    
        
    </body>
  
</html>