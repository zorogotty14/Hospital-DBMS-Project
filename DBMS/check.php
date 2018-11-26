<?php 
session_start();
$db=mysqli_connect('localhost','root','','dbms');
$query1="select room_no,status from room where type like 'General Ward';";
$result1=mysqli_query($db,$query1);
while($row1=mysqli_fetch_array($result1)){
 				   
    $r1=$row1['room_no'];
    $s1=$row1['status'];
    echo $r1."<br>";
    echo $s1."<br>";
}
echo "Check";
?>
