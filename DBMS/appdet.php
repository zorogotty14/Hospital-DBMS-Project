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
   <li><a href="home.php">HealthCare Management</a></li>
   <?php 
   		if(isset($_SESSION['user'])){
   			echo "<li><a href='#'>".$_SESSION['user']."</a></li>";
   		}
   	?>
   </ul>
</nav>
<div id="box">
<h1>Appointments</h1>
<form method="post"  id="pat_search" action="search.php">
	<input type="text" name="appno" placeholder="Appointment no" class="appno">
	<button type='submit' name='search' class="search">search</button>
	</form>
<table id="customers">
  <tr>
    <th>Appointment no</th>
    <th>Patient</th>
    <th>Doctor</th>
    <th>Problem</th> 
    <th>Appointment Date</th>
  </tr>
    <?php appointment_det(); ?>
</table>
</div>
</body>

</html>