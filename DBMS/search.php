<?php
session_start();
$db=mysqli_connect('localhost','root','','dbms');
if(isset($_POST['search'])){
	$pid=$_POST['pat_id'];
	 $query="select * from patient where Pat_id='$pid';";
	  $result=mysqli_query($db,$query);
	  echo '<!DOCTYPE html>
<html>
<head>
	<title>patient details</title>
	<link rel="icon" href="icons8-Doctors Bag-40.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="del.css">

</head>
<body>
<nav id="nav">
	<ul>
   <li><a href="#logo" class="logo"><img src="hi1.svg" height="23px" width="27px" /></a></li>
   <li><a href="home.php">HealthCare Management</a></li>';
   if(isset($_SESSION['user'])){
   			echo "<li><a href='#'>".$_SESSION['user']."</a></li>";
   		}
echo '
 </ul>
</nav>
<div id="box">
<form method="post"  id="pat_search" action="search.php">
	<input type="text" name="pat_id" placeholder="Patient id" class="pat_id">
	<button type="submit" name="search" class="search">search</button><br><br>
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
  </tr>	';
  while($row=mysqli_fetch_array($result)){
    $name=$row['name'];
    $Pat_id=$row['Pat_id'];
    $gender=$row['gender'];
    $age=$row['age'];
    $DOB=$row['DOB'];
    $phno=$row['phno'];
    $add=$row['address'];
    echo '<tr>
      <td>'.$Pat_id.'</td>
      <td>'.$name.'</td>
      <td>'.$age.'</td>
      <td>'.$gender.'</td>
      <td>'.$DOB.'</td>
      <td>'.$phno.'</td>
      <td>'.$add.'</td>
    </tr>';
}
echo '</table><br><br>
</div>
</body>
</html>';
}

if(isset($_POST['delete'])){
	
}
?>