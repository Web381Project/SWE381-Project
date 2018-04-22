<<<<<<< HEAD
<?php 
require_once('core/init.php');
=======

<?php 
require_once('core/init.php');

>>>>>>> 06457a3aab9266e33d5366b1634bacdc9d582f73
if(isset($_GET['orderNo']))
    $order_No = $_GET['orderNo'];
    $orders_list1 ="SELECT * FROM orderItem WHERE orderNo='$order_No'";
$query1 = mysqli_query($db,$orders_list1);
<<<<<<< HEAD
if (mysqli_num_rows($query1) > 0) {
while ($row=mysqli_fetch_array($query1)){
$itemID=$row["itemID"];
$qun=$row["quantity"];
$update ="UPDATE `Products` SET quantity=quantity+'$qun' WHERE id='$itemID'";
 mysqli_query($db,$update);
$ordersDelete ="Delete FROM orderItem WHERE itemID='$itemID'";
 mysqli_query($db,$ordersDelete);
}} 
$ordersDelete ="Delete FROM orders WHERE orderNo='$order_No'";
$query1 = mysqli_query($db,$ordersDelete);
    header("Location:billing.php");
?>
=======

if (mysqli_num_rows($query1) > 0) {
while ($row=mysqli_fetch_array($query1)){

$itemID=$row["itemID"];



$qun=$row["quantity"];


$update ="UPDATE `Products` SET quantity=quantity+'$qun' WHERE id='$itemID'";
 mysqli_query($db,$update);

$ordersDelete ="Delete FROM orderItem WHERE itemID='$itemID'";
 mysqli_query($db,$ordersDelete);

}} 

$ordersDelete ="Delete FROM orders WHERE orderNo='$order_No'";
$query1 = mysqli_query($db,$ordersDelete);

    header("Location:billing.php");

?>

>>>>>>> 06457a3aab9266e33d5366b1634bacdc9d582f73
