
<?php 
require_once('core/init.php');

if(isset($_GET['orderNo']))
    $order_No = $_GET['orderNo'];
    $orders_list1 ="SELECT * FROM orderItem WHERE orderNo='$order_No'";
$query1 = mysqli_query($db,$orders_list1);
if (mysqli_num_rows($query1) > 0) {
while ($row=mysqli_fetch_array($query1)){
$itemID=$row["itemID"];
$qun=$row["quantity"];
$update ="UPDATE `Products` SET quantity=quantity+'$qun' WHERE id='$itemID'";
$update6 ="UPDATE `Products` SET sells=sells-'$qun' WHERE id='$itemID'";
 mysqli_query($db,$update);
  mysqli_query($db,$update6);
$ordersDelete ="Delete FROM orderItem WHERE itemID='$itemID'";
 mysqli_query($db,$ordersDelete);
}} 
$ordersDelete ="Delete FROM orders WHERE orderNo='$order_No'";
$query1 = mysqli_query($db,$ordersDelete);
    header("Location:billing.php");
?>


