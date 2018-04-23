<?php
 require_once('core/init.php');
session_start();
$cridt=$_GET["credit"];
$Adress=$_GET["address"];
$IDUSER=$_SESSION["ID"];




$Inserts="INSERT INTO orders (ID, creditCard , deliveryAddress ,status) VALUES ('$IDUSER', '$adr', '$cridt' , 'Ordered')"	; 
$query = mysqli_query($db,$Inserts);


$Ordernumber="SELECT * From orders ORDER BY orderNo DESC";
 $query2 = mysqli_query($db,$Ordernumber);
 
while($row = mysqli_fetch_array($query2)){
$orderNo=$row['orderNo'];
break;}

 
 if(!empty($_SESSION["shopping_cart"])){
                $total = 0;
                
                foreach($_SESSION["shopping_cart"] as $keys => $values)
                {
                $QUN=$values["item_quantity"];
                $itemID=$values["item_id"];
                $pricee=$values["item_quantity"] * $values["item_price"] ;
          $total=$total+$pricee;
       $item="INSERT INTO `orderitem`(`itemID`, `orderNo`, `quantity`, `price`) VALUES ($itemID,$orderNo,$QUN,$pricee)";
       $query2 = mysqli_query($db,$item);
       
   $Insertss="UPDATE Products SET sells=sells+'$QUN' WHERE ID='$itemID'"; 
   mysqli_query($db, $Insertss); 
}}
           
   $Insertss="UPDATE orders SET total='$total'  WHERE orderNo='$orderNo'";       

 mysqli_query($db, $Insertss);
           unset ($_SESSION["shopping_cart"]);
           
           header("Location:Home.php");
           
           
              ?>