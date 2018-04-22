
<?php
  

// UpdateProfile






// CHECK IF ADMIN
function is_admin(){
    @session_start();
    if((isset($_SESSION['Type']) == 'Admin')){
        return true;
    } else {
        return false;
    }

}











//
//
// GET PRODUCTS
//
//

function getProducts($db){
    $sql = "SELECT * FROM Products";
    $result = $db->query($sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "<p>Product Name:".$row['title'];
        echo "<p>Product Name:".$row['rating'];
             
    }
}






?>

