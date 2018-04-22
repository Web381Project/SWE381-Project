<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<?php
    
// CHECK IF ADMIN
function is_admin(){
    @session_start();
    if(isset($_SESSION['Type']) && $_SESSION['Type'] == 'Admin'){
        return true;
    } else {
        return false;
    }

}

$cats = "SELECT * FROM Categories";
$result = $db->query($cats);

// PRINT CATEGORIES (USED IN NAVIGATION.PHP)

function printCategories($db){
    $sql = "SELECT * FROM Categories";
    $result = $db->query($sql);

    while($row = mysqli_fetch_assoc($result)){
        echo "<p>". $row['category']."</p><br>";
    
    }
    
}


?>
    
<nav>
     <div class="row">
        <ul class="main-nav">
                              
        <li><a href="Home.php">Home</a></li>


        <?php
        while($row = mysqli_fetch_assoc($result)){  //GO THROUGH EVERY CATEGORY

        echo '<li><a href="allProducts.php?cat='.$row["id"].'">'.$row["category"].'</a></li>'; 
                           
        } ?>
                      
           <?php
  
            if(is_admin()){
            echo "<li><a href='addProduct.php'>New Product</a></li>";
            echo "<li><a href='addCategory.php'>New Category</a></li>";
            echo "<li><a href='productList.php'>Products</a></li>";          
             echo "<li><a href='manageproducts.php'>Manage</a></li>";          
        
            }       
                
                 ?>

                           <!-------- i linked the register page her---> 
                           
                           <li style="float: right"><a href="<?php if(isset($_SESSION['ID'])){echo 'Profile.php'; }else{echo 'signin.php'; } ?>"><i class="fas fa-user"></i></a></li>                 
                           <li style="float: right"><a href="cart.php"><i class="fas fa-shopping-basket"></i></a></li>

                            <li style ="float: right"><div class="topnav">
                          <div class="search-container">

                          <form action="search.php" method="GET">

                            <input type="text" name="query" />

                            <button type="submit" style="margin-top:0px;background-color:transparent;border-color:transparent;" class="btn btn-success" >
                                <i class="fa fa-search"></i>
                            </button>
                          </form>

                           </div>
                          </li>
                         </div>


                       </ul>          
              
                     </div>

                 </nav>
