<?php
$db=mysqli_connect('localhost','root','','dbms');
$query= "select room_no from room where status like 'Available';";
$query1= "select Pat_id from patient";
$result=mysqli_query($db,$query);
$result1=mysqli_query($db,$query1);?>
<!DOCTYPE html>
<html>
<head>
	<title>Reservation</title>
  <link rel="icon" href="icons8-Doctors Bag-40.png">
	<link rel="stylesheet" type="text/css" href="app.css">
</head>
<body>
<div id="log">
  <img src="loginlogo.png" style="position: relative;top: 30px;left :285px;opacity: 1"><br>
  <h1>Make Reservation.</h1>
 <form method="post" action="pass.php" id="form"  name="myForm">
  <label id="id">Reservation no :</label><br>
    <input type="text" name="res_no" placeholder="Reservation no"><br><br>
  <label id="id">Patient ID :</label><br>
  <select name="pat_id">
  		<option disabled selected value> -- select an option -- </option>
  		<?php
  		while($row=mysqli_fetch_array($result1)){
  			$pid=$row['Pat_id'];
  			echo "<option value='$pid'>".$pid."</option>";
  		}?>
  	</select>
  		<br><br>
  <label id="doc">Available rooms :</label><br>
  <select name="room">
  		<option disabled selected value> -- select an option -- </option>
  		<?php
  		while($row=mysqli_fetch_array($result)){
  			$roomno=$row['room_no'];
  			echo "<option value='$roomno'>".$roomno."</option>";
  		}
?>
 </select>
 <br><br>
   <label id="appno">In Date :</label><br><input type="date" name="indate"><br><br>
  <label id="date">Out Date :</label><br><input type="date" name="outdate"><br><br>

  <button type="submit" name="res">Reserve</button><br>
  <br><br><br>
  <button type="button" class="cancelbtn">Cancel</button>
 </form>

 </div>
</body>
</html>


