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
<h1>Patient Details</h1>
<form method="post"  id="pat_search" action="pass.php">
  <input type="text" name="pat_id" placeholder="Patient id" class="pat_id">
  <button type='submit' name='delete' class="delete">Delete</button>
  </form>
<table id="customers">
  <tr>
    <th>Pat_id</th>
    <th>Name</th>
    <th>Age</th>
    <th>Sex</th> 
    <th>DOB</th>
    <th>Contact</th>
    <th>Address</th>
  </tr>
    <?php patient_det(); ?>
</table>
</div>
</body>

</html>