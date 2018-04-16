<?php
    
$sql = "SELECT * FROM categories";
$result = $db->query($sql);

?>

    
<nav>
                   <div class="row">
                       <ul class="main-nav">

                           
                           <li><a href="Home.php"></a></li>
                           
                           <li><a href="plasterSculptures.php">Plaster Sculptures</a></li>
                           <li><a href="woodSculptures.php">Wood Sculptures</a></li>
                           <li><a href="paintings.php">Paintings</a></li>
                           
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
