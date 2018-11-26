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
	<link rel="stylesheet" type="text/css" href="l3.css">
	
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
<div id="did">

</div>

</div>
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
