<?php 
session_start();
$db = mysqli_connect('localhost', 'root', '', 'dbms');
if(isset($_POST['login_user'])){
	$username=$_POST['id'];
	$password=$_POST['password'];
	$query="select * from login where username='$username' and password='$password'";
	$result=mysqli_query($db,$query);
	if (mysqli_num_rows($result)==1) {
		$_SESSION['user']=$username;
		header("location:home.php");
	}
	else{
		echo "<script>alert('error')</script>";
		echo "<script>window.open('login.php','_self')</script>";
	}
}
if(isset($_POST['add_pat'])){
	$name=$_POST['name'];
	$age=$_POST['age'];
	$sex=$_POST['sex'];
	$phno=$_POST['contact'];
	$id=$_POST['pat-id'];
	$dob=$_POST['dob'];
	$address=$_POST['address'];
	$query="insert into patient(Pat_id,name,DOB,gender,age,phno,address) values('$id','$name','$dob','$sex','$age','$phno','$address')";
	$result=mysqli_query($db,$query);
	if($result){
		echo "<script>alert('done')</script>";
		echo "<script>window.open('home.php','_self')</script>";

	}

	}

if(isset($_POST['add_app'])) {
	$pat_id=$_POST['pat_id'];
	$app_no=$_POST['appno'];
	$prob=$_POST['prob'];
	$doc=$_POST['doc'];
	$date=$_POST['date'];
	$sql="insert into appoinment(appno,Pat_id,Doctor,prob,dat) values('$app_no','$pat_id','$doc','$prob','$date')";
	if ($db->query($sql) === TRUE) {
    echo "<script>alert('done')</script>";
   	echo "<script>window.open('home.php','_self')</script>";

} else {
    echo "<script>alert('error')</script>";
   	echo "<script>window.open('home.php','_self')</script>";

}


	}

if(isset($_POST['res'])) {
	$pat_id=$_POST['pat_id'];
	$res_no=$_POST['res_no'];
	$room=$_POST['room'];
	$indate=$_POST['indate'];
	$outdate=$_POST['outdate'];
	$sql="insert into reservation(Res_no,room_no,Pat_id,indate,outdate) values('$res_no','$room','$pat_id','$indate','$outdate')";
	$sql1="update room set status='Not Available' where room_no='$room';";
	if ($db->query($sql) === TRUE && $db->query($sql1) === TRUE) {
    echo "<script>alert('done')</script>";
   	echo "<script>window.open('home.php','_self')</script>";

} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}


	}

if(isset($_POST['add_bill'])){
	$bno=$_POST['bill'];
	$bpid=$_POST['Bpat_id'];
	$amt=$_POST['amount'];
	$st=$_POST['status'];
	$query1="insert into bill(bill_no,patient_id,amount,status) values('$bno','$bpid','$amt','$st')";
	if($db->query($query1)===TRUE){
		echo "<script>alert('done')</script>";
		echo "<script>window.open('home.php','_self')</script>";
	}
	else{
		echo "<script>alert('error')</script>";
	//	echo "<script>window.open('bill.php','_self')</script>";
		echo $bno."<br>";
		echo $bpid."<br>";
		echo $amt."<br>";
		echo $st."<br>";		
	}
	}	

if(isset($_POST['dbl'])){
	//$bid=$_POST['bid'];
	$query3="delete from bill where bill_no='".$_POST['bid']."'";
	if($db->query($query3)===TRUE){
		echo "YES";
	}
	else{
		echo "Error:".$query3."<br>".$db->error;
	}
	}

if(isset($_POST['delete'])){
	$patid=$_POST['pat_id'];
	$query3="delete from patient where Pat_id='$patid'";
	if($db->query($query3)===TRUE){
		echo "<script>alert('done')</script>";
		echo "<script>window.open('patdel.php','_self')</script>";
	}
	else{
		echo "Error:".$query3."<br>".$db->error;
	}
	}

if(isset($_POST['stats'])){
	$pid=$_POST['id'];
	$stat=$_POST['stat'];
	$query="update bill set status='$stat' where patient_id='$pid'";
	$result=mysqli_query($db,$query);
	if($result){
		echo "<script>alert('done')</script>";
		echo "<script>window.open('home.php','_self')</script>";

	}
	}


function doc_det(){
global $db;
$query="select * from Doctor";
	$result=mysqli_query($db,$query);
	while($row=mysqli_fetch_array($result))
	{
		$name=$row['Doc_name'];
		$id=$row['Doc_id'];
		$gen=$row['gender'];
		$spe=$row['specialization'];
		echo "<tr class='tab'>
				<td>$id</td>
				<td>$name</td>
				<td>$gen</td>
				<td>$spe</td>
				</tr>";
	}
}
function appointment_det(){
global $db; 
$query2="select * from appoinment";
	$result2=mysqli_query($db,$query2);
	while($row=mysqli_fetch_array($result2))
	{
		$appno=$row['appno'];
		$patid=$row['Pat_id'];
		$doc=$row['Doctor'];
		$prob=$row['prob'];
		$date=$row['dat'];
		echo "<tr class='tab'>
				<td>$appno</td>
				<td>$patid</td>
				<td>$doc</td>
				<td>$prob</td>
				<td>$date</td>
				</tr>";
	}
}

function bill_all(){
global $db;
$query2="select * from bill";
	$result2=mysqli_query($db,$query2);
	while($row=mysqli_fetch_array($result2))
	{
		$bno=$row['bill_no'];
		$bpid=$row['patient_id'];
		$amt=$row['amount'];
		$st=$row['status'];
		echo "<tr>
				<td>$bno</td>
				<td>$bpid</td>
				<td>$amt</td>
				<td>$st</td>
				</tr>";
		

	}
}

function patient_det(){
global $db;
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
		echo "<tr class='tab'>
				<td>$id</td>
				<td>$name</td>
				<td>$age</td>
				<td>$dob</td>
				<td>$gender</td>
				<td>$phno</td>
				<td>$add</td>
				</tr>";
	}
}

function patient_noapp(){
global $db;
$query5="select patient.name,patient.Pat_id,appoinment.appno,appoinment.Doctor,bill.bill_no,bill.amount,bill.status from (patient left join appoinment on appoinment.pat_id=patient.Pat_id)left join bill on appoinment.Pat_id=bill.patient_id
";
	$result5=mysqli_query($db,$query5);
	while($row=mysqli_fetch_array($result5))
	{
		$name=$row['name'];
		$id=$row['Pat_id'];
		$Appno=$row['appno'];
		$dtr=$row['Doctor'];
		$bno=$row['bill_no'];
		$bamt=$row['amount'];
		$bst=$row['status'];
		echo "<tr>
				<td>$name</td>
				<td>$id</td>
				<td>$Appno</td>
				<td>$dtr</td>
				<td>$bno</td>
				<td>$bamt</td>
				<td>$bst</td>
				</tr>";
		

	}
}
function sup_doc(){
global $db;
$query="select distinct department.chief,Listofdocs.dname,department.Dep from department,Listofdocs where department.Dep=Listofdocs.Dep and department.chief!=Listofdocs.dname ";
	$result=mysqli_query($db,$query);
	while($row=mysqli_fetch_array($result))
	{
		$depp=$row['Dep'];
		$cf=$row['chief'];
		$und=$row['dname'];
		echo "<tr>
				<td>$depp</td>
				<td>$cf</td>
				<td>$und</td>
				</tr>";
	}
}
if(isset($_POST['cancel'])){
	$appno=$_POST['appno'];
	$query3="delete from appoinment where appno='$appno'";
	if($db->query($query3)===TRUE){
		echo "<script>alert('done')</script>";
		echo "<script>window.open('canapp.php','_self')</script>";
	}
	else{
		echo "Error:".$query3."<br>".$db->error;
	}
	}

if(isset($_POST['ck'])){
	$room=$_POST['room'];
	$query="delete from reservation where room_no='$room';";
	$query1="update room set status='Available' where room_no='$room';";
	if ($db->query($query) === TRUE && $db->query($query1) === TRUE) {
    echo "<script>alert('done')</script>";
   	echo "<script>window.open('home.php','_self')</script>";

} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

}

?>
