<?php

$db = mysqli_connect('localhost', 'root', '', 'DBMS');
$query="select * from patient";
	$result=mysqli_query($db,$query);
	while($row=mysqli_fetch_array($result))
	{
		$name=$row['name'];
		$id=$row['Pat_id'];
		$dob=$row['DOB'];
		$age=$row['age'];
		$phno=$row['phno'];
		$add=$row['address'];
		$gender=$row['gender'];
		echo $name;
		echo "<br>";
		echo $id;
		echo "<br>";
		echo $dob;
		echo "<br>";
		echo $age;
		echo "<br>";
		echo $add;
		echo "<br>";
		echo $gender;
		echo "<br>";
		echo $phno;

	}

?>