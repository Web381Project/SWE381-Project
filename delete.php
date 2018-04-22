<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"Mondo");

$id=$_GET["id"];

$res=mysqli_query($link,"SELECT * FROM Products WHERE id=$id");
while($row=mysqli_fetch_array($res))
{
	$img=$row["image"];
}

unlink($img);

mysqli_query($link,"DELETE FROM Products WHERE id=$id");
?>
<script type="text/javascript">
     window.location="productList.php"; //display_items
</script>