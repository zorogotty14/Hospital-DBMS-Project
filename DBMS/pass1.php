<?php
$name=$_POST['name'];
$age=$_POST['age'];
$dob=$_POST['dob'];
$sex=$_POST['sex'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$db=mysqli_connect('localhost','root','','hospital');
if(! $db ) {
            die('Could not connect: ' . mysql_error());
         }

         echo 'Connected successfully<br />';
$query="INSERT INTO patient(name,age,DOB,sex,contact,address)
			VALUES('$name','$age','$dob','$sex','$contact','$address')";
mysqli_query($db, $query);

?>
