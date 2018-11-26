<?php 
session_start();
$db=mysqli_connect('localhost','root','','dbms');
$query1="select * from Doctor where specialization='Oncologist';";
$result1=mysqli_query($db,$query1);
$query2="select * from Doctor where specialization='Radiologist';";
$result2=mysqli_query($db,$query2);
$query3="select * from Doctor where specialization='Cardiologist';";
$result3=mysqli_query($db,$query3);
$query4="select * from Doctor where specialization='Neurologist';";
$result4=mysqli_query($db,$query4);
$query5="select * from Doctor where specialization='Enzymologist';";
$result5=mysqli_query($db,$query5);
$query6="select * from Doctor where specialization='Opthamologist';";
$result6=mysqli_query($db,$query6);
$query7="select * from Doctor where specialization='Orthodontist';";
$result7=mysqli_query($db,$query7);
$query8="select * from Doctor where specialization='Psychologist';";
$result8=mysqli_query($db,$query8);
$query9="select * from Doctor where specialization='Gynaecologist';";
$result9=mysqli_query($db,$query9);
$query10="select * from Doctor where specialization='Dermatologist';";
$result10=mysqli_query($db,$query10);
$query11="select * from Doctor where specialization='Pediatrician';";
$result11=mysqli_query($db,$query11);
$query12="select * from Doctor where specialization='Nephrologist';";
$result12=mysqli_query($db,$query12);
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

<div id="first">
<div id="box">
	<div class="container-1">
		<div class="col">
			<a href="" class="head"><form  method="post" action="pass.php">Oncologist</form></a>';
while($row1=mysqli_fetch_array($result1)){
 				   
    $name=$row1['Doc_name'];
    echo '<tr>
      <td><i>->'.$name.'</i></td><br>
    </tr>';
}
echo'</div>
	</div>';
echo '<div class="container-2">
		<div class="col">
			<a href="" class="head">Radiologist</a>';
while($row2=mysqli_fetch_array($result2)){
 				   
    $name=$row2['Doc_name'];
    echo '<tr>
      <td><i>->'.$name.'</i></td><br>
    </tr>';
}			
echo'		</div>
	</div>';
echo'	<div class="container-3">
		<div class="col">
			<a href="" class="head">Cardiologist</a>';
while($row3=mysqli_fetch_array($result3)){
 				   
    $name=$row3['Doc_name'];
    echo '<tr>
      <td><i>->'.$name.'</i></td><br>
    </tr>';
}						
echo'			</div>
	</div>';
echo'
	<div class="container-4">
		<div class="col">
			<a href="" class="head">Neurologist</a>';
while($row4=mysqli_fetch_array($result4)){
 				   
    $name=$row4['Doc_name'];
    echo '<tr>
      <td><i>->'.$name.'</i></td><br>
    </tr>';
}			

echo'		</div>
	</div>';
echo '
	<div class="container-5">
		<div class="col">
			<a href="" class="head">Enzymologist</a>';
while($row5=mysqli_fetch_array($result5)){
 				   
    $name=$row5['Doc_name'];
    echo '<tr>
      <td><i>->'.$name.'</i></td><br>
    </tr>';
}			

echo'
		</div>
	</div>';

echo'	<div class="container-6">
		<div class="col">
			<a href="" class="head">Opthamalogist</a>';
while($row6=mysqli_fetch_array($result6)){
 				   
    $name=$row6['Doc_name'];
    echo '<tr>
      <td><i>->'.$name.'</i></td><br>
    </tr>';
}			

echo'			</div>
	</div>';
echo'
	<div class="container-7">
		<div class="col">
			<a href="" class="head">Orthodontist</a>';
while($row7=mysqli_fetch_array($result7)){
 				   
    $name=$row7['Doc_name'];
    echo '<tr>
      <td><i>->'.$name.'</i></td><br>
    </tr>';
}			

echo'		</div>
	</div>';

echo'	<div class="container-8">
		<div class="col">
			<a href="" class="head">Psychologist</a>';
while($row8=mysqli_fetch_array($result8)){
 				   
    $name=$row8['Doc_name'];
    echo '<tr>
      <td><i>->'.$name.'</i></td><br>
    </tr>';
}			

echo'		</div>
	</div>';


echo'	<div class="container-9">
		<div class="col">
			<a href="" class="head">Gynaecologist</a>';
while($row9=mysqli_fetch_array($result9)){
 				   
    $name=$row9['Doc_name'];
    echo '<tr>
      <td><i>->'.$name.'</i></td><br>
    </tr>';
}			

		echo'</div>
	</div>';
echo'	<div class="container-10">
		<div class="col">
			<a href="" class="head">Dermatologist</a>';
while($row10=mysqli_fetch_array($result10)){
 				   
    $name=$row10['Doc_name'];
    echo '<tr>
      <td><i>->'.$name.'</i></td><br>
    </tr>';
}			

		echo'</div>
	</div>';
echo'
	<div class="container-11">
		<div class="col">
			<a href="" class="head">Paedatrician</a>';
while($row11=mysqli_fetch_array($result11)){
 				   
    $name=$row11['Doc_name'];
    echo '<tr>
      <td><i>->'.$name.'</i></td><br>
    </tr>';
}			

echo'		</div>
	</div>';
echo'	<div class="container-12">
		<div class="col">
			<a href="" class="head">Nephrologist</a>';
while($row12=mysqli_fetch_array($result12)){
 				   
    $name=$row12['Doc_name'];
    echo '<tr>
      <td><i>->'.$name.'</i></td><br>
    </tr>';
}			

echo'		</div>
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
