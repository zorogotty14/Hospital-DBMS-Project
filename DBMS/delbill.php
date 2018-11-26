<?php 
include("pass.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>patient details</title>
	<link rel="icon" href="icons8-Doctors Bag-40.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="p.css">

</head>
<body>
<nav id="nav">
	<ul>
   <li><a href="#logo" class="logo"><img src="hi1.svg" height="23px" width="27px" /></a></li>
   <li><a href="#">HealthCare Management</a></li>
   <?php 
   		if(isset($_SESSION['user'])){
   			echo "<li><a href='#'>".$_SESSION['user']."</a></li>";
   		}

   	?>
   </ul>
</nav>
<div id="box">
<form method="post" action="pass.php" name="search">
  <input type="text" name="bid" placeholder="bill_id" class="dbl">
  <button type="submit" class="dbl"  name="dbl">Update</button>
</form>
<table id="customers">
  <tr>
    <th>Pat_id</th>
    <th>Bill_No</th>
    <th>Amount</th>
    <th>Status</th> 
  </tr>
  <?php bill_all(); ?>
  
</table>
</div>
</body>
</html>
