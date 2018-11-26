<?php
$db=mysqli_connect('localhost','root','','dbms');
$query= "select Doc_name from Doctor";
$query1= "select Pat_id from patient";
$result=mysqli_query($db,$query);
$result1=mysqli_query($db,$query1);?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
  <link rel="icon" href="icons8-Doctors Bag-40.png">
	<link rel="stylesheet" type="text/css" href="app.css">
</head>
<body>
<div id="log">
  <img src="loginlogo.png" style="position: relative;top: 30px;left :285px;opacity: 1"><br>
  <h1>Make Appointment.</h1>
 <form method="post" action="pass.php" id="form"  name="myForm">
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
  <label id="problem">Problem :</label><br><input type="text" name="prob" placeholder="Disease"><br><br>
  <label id="doc">Doctor :</label><br>
  <select name="doc">
  		<option disabled selected value> -- select an option -- </option>
  		<?php
  		while($row=mysqli_fetch_array($result)){
  			$docname=$row['Doc_name'];
  			echo "<option value='$docname'>".$docname."</option>";
  		}
?>
 </select><br><br>
   <label id="appno">Appointment no :</label><br><input type="text" name="appno" placeholder="appointment no"><br><br>
  <label id="date">Appointment date :</label><br><input type="date" name="date"><br><br>

  <button type="submit" name="add_app">Submit</button><br>
  <input type="checkbox" checked="checked"> Remember me
  <br><br><br>
  <button type="button" class="cancelbtn">Cancel</button>
  <span class="psw">Forgot <a href="#">password?</a></span>
 </form>

 </div>
</body>
</html>


