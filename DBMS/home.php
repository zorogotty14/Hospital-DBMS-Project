<?php 
session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Health-Care Management</title>
	<link rel="icon" href="icons8-Doctors Bag-40.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="l.css">
	
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

<div id="first">
<div id="box">
	<div class="container-1">
		<div class="col">
			<a href="" class="head">Patient</a>
			<a href="patdet.php">Patient Details</a>
			<a href="pat.php">Add Patient details</a>
			<a href="patdel.php">Patient Delete</a>
		</div>
	</div>
	<div class="container-2">
		<div class="col">
			<a href="" class="head">Doctor</a>
			<a href="docdet.php">Doctor Details</a>
			<a href="appointment.php">Make Appointment</a>
			<a href="f.php">Specialization</a>
		</div>
	</div>
	<div class="container-3">
		<div class="col">
			<a href="" class="head">Room</a>
			<a href="roomdet.php">Room Details</a>
			<a href="reg.php">Room Reservations</a>
			<a href="checout.php">Payment/checkout</a>
		</div>
	</div>
	<div class="container-mid1">
			<a href="patientsnoappl.php" class="head1">Patients with no Appointments</a>
	</div>
	<div class="container-mid2">
			<a href="depdoc.php" class="head1">Department Head</a>
	</div>
	<div class="container-4">
		<div class="col">
			<a href="" class="head">Bill</a>
			<a href="billdet.php">Billing Details</a>
			<a href="bill.php">Make Bill</a>
			<a href="billpay.php">Pay Bill</a>

		</div>
	</div>
	<div class="container-5">
		<div class="col">
			<a href="" class="head">Appointments</a>
			<a href="appdet.php">Appointment Details</a>
			<a href="appointment.php">Make Appointment</a>
			<a href="canapp.php">Cancel Appointment</a>

		</div>
	</div>

</div>
</div>

<div id="last">
	<p>© 2017 Healthcare Management.  All rights reserved. | Design © 2017 popdot media</p>
</div>
<script>
function myFunction() {
    var x = document.getElementById("nav");
    if (x.className === "") {
        x.className += " responsive";
    } else {
        x.className = "";
    }
}

</script>
</body>
</html>
