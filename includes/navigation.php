<?php
    
require_once('core/init.php');

 $cats = "SELECT * FROM Categories";
    $result = $db->query($cats);

?>
    
<nav>
     <div class="row">
        <ul class="main-nav">
                           
        <li><a href="Home.php">Home</a></li>


        <?php
        while($row = mysqli_fetch_assoc($result)){
        ?>

        <li><a href="paintings.php"><?php echo $row['category']?></a></li>
                           
        <?php } ?>
                           
                           <!-------- i linked the register page her---> 
                           
                           <li style="float: right"><a href="signin.php"><i class="fas fa-user"></i></a></li>                 
                           <li style="float: right"><a href="cart.php"><i class="fas fa-shopping-basket"></i></a></li>

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
