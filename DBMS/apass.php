<?php
$db=mysqli_connect('localhost', 'root', '', 'hospital');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 else{
 	echo "connected ";
 }
if(isset($_POST['add_app'])) {
	$pat_id=$_POST['pat_id'];
	$app_no=$_POST['appno'];
	$prob=$_POST['prob'];
	$doc=$_POST['doc'];
	$date=$_POST['date'];
	echo "string";
	$sql="insert into appoinment(Appointment no,Pat_id,Doctor,Problem,App_date) values('$app_no','$pat_id','$doc','$prob','$date')";
	if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}


	}


?>