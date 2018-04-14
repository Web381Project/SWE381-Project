<?php
require_once('core/init.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shipping Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
     <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <style>
table.blueTable {
  border: 1px solid #9FA2A4;
  background-color: #E6E6E6;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
table.blueTable td, table.blueTable th {
  border: 1px solid #000000;
  padding: 3px 2px;
}
table.blueTable tbody td {
  font-size: 13px;
}
table.blueTable tr:nth-child(even) {
  background: #E6E6E6;
}
table.blueTable td:nth-child(even) {
  background: #E6E6E6;
}
table.blueTable thead {
  background: #FAFFFE;
  background: -moz-linear-gradient(top, #fbfffe 0%, #fafffe 66%, #FAFFFE 100%);
  background: -webkit-linear-gradient(top, #fbfffe 0%, #fafffe 66%, #FAFFFE 100%);
  background: linear-gradient(to bottom, #fbfffe 0%, #fafffe 66%, #FAFFFE 100%);
  border-bottom: 2px solid #444444;
}
table.blueTable thead th {
  font-size: 15px;
  font-weight: bold;
  color: #000000;
  border-left: 2px solid #D0E4F5;
}
table.blueTable thead th:first-child {
  border-left: none;
}

table.blueTable tfoot td {
  font-size: 14px;
}
table.blueTable tfoot .links {
  text-align: right;
}
table.blueTable tfoot .links a{
  display: inline-block;
  background: #1C6EA4;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}
</style>
    
                <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
	
     <?php include 'includes/navigation.php'; ?>     
        
	</header>


<!------ Include the above in your HEAD tag ---------->


    	<table class="blueTable">
<thead>
<tr>
<th>Order Number</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>1-000223451132</td>
<td>Shipped</td>
<td>Track</td>
</tr>
<tr>
<td>1-039481175833</td>
<td>Dilvered</td>
<td>No Action</td>
</tr>
<tr>
<td>1-200001100456</td>
<td>Processing</td>
<td>Return &amp; Cancel</td>
</tr>
</tbody>
</table>
    



 <!--Footer-->
<?php include 'includes/footer.php' ?>



</body>
</html>