<?php 
session_start();
$db=mysqli_connect('localhost','root','','dbms');
$query1="select room_no,status from room where type like 'General Ward';";
$result1=mysqli_query($db,$query1);
$query2="select room_no,status from room where type like 'ICU';";
$result2=mysqli_query($db,$query2);
$query3="select room_no,status from room where type like 'Suite';";
$result3=mysqli_query($db,$query3);
$query4="select room_no,status from room where type like 'Maternity Ward';";
$result4=mysqli_query($db,$query4);
$query5="select room_no,status from room where type like 'Emergency Room';";
$result5=mysqli_query($db,$query5);
$query6="select room_no,status from room where type like 'Operating Theatre';";
$result6=mysqli_query($db,$query6);
echo'<!DOCTYPE html>
<html>
<head>
	<title>Health-Care Management</title>
	<link rel="icon" href="icons8-Doctors Bag-40.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="l1.css">
	
</head>
<body>
<nav id="nav">
	<ul>
   <li><a href="#logo" class="logo"><img src="hi1.svg" height="23px" width="27px" /></a></li>
   <li><a href="home.php">HealthCare Management</a></li>';
  if(isset($_SESSION['user'])){
        echo "<li><a href='#'>".$_SESSION['user']."</a></li>";  
  }
 echo ' </ul>
</nav>

<div id="first1">
<div id="box">
	<div class="container-1">
		<div class="col">
			<a href="" class="head">General Ward</a>';
while($row1=mysqli_fetch_array($result1)){
 				   
    $r1=$row1['room_no'];
    $s1=$row1['status'];
    echo '<a href="">'.$r1.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$s1.'</a> ';
    }
echo'</div>
	</div>
<div class="container-2">
    <div class="col">
      <a href="" class="head">ICU</a>';
while($row2=mysqli_fetch_array($result2)){
           
    $r2=$row2['room_no'];
    $s2=$row2['status'];
    echo '<a href="">'.$r2.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$s2.'</a> ';
    }
echo'</div>
  </div>
  <div class="container-3">
    <div class="col">
      <a href="" class="head">Suite</a>';
while($row3=mysqli_fetch_array($result3)){
           
    $r3=$row3['room_no'];
    $s3=$row3['status'];
    echo '<a href="">'.$r3.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$s3.'</a> ';
    }
echo'</div>
  </div>
<div class="container-4">
    <div class="col">
      <a href="" class="head">Maternity Ward</a>';
while($row4=mysqli_fetch_array($result4)){
           
    $r4=$row4['room_no'];
    $s4=$row4['status'];
    echo '<a href="">'.$r4.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$s4.'</a> ';
    }
echo'</div>
  </div>
<div class="container-5">
    <div class="col">
      <a href="" class="head">Emergency Room</a>';
while($row5=mysqli_fetch_array($result5)){
           
    $r5=$row5['room_no'];
    $s5=$row5['status'];
    echo '<a href="">'.$r5.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$s5.'</a> ';
    }
echo'</div>
  </div>
<div class="container-6">
    <div class="col">
      <a href="" class="head">Operating Theatre</a>';
while($row6=mysqli_fetch_array($result6)){
           
    $r6=$row6['room_no'];
    $s6=$row6['status'];
    echo '<a href="">'.$r6.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$s6.'</a> ';
    }
echo'</div>
  </div>';


echo'</div>
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
';
?>