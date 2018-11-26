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
<h1>Doctors List</h1>
<form method="post"  id="doc_search" action="d.php">
  <input type="text" name="Doc_id" placeholder="Doctor id" class="doc_id">
  <button type='submit' name='sch' class="search">search</button>
  </form>
  <table id="customers">
  <tr>
    <th>Doc_id</th>
    <th>Doc_name</th>
    <th>Sex</th> 
    <th>Field</th>
  </tr>
  <?php doc_det(); ?>
  
</table>
</div>
</body>
</html>