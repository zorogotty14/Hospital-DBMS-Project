<?php
$db=mysqli_connect('localhost','root','','dbms');
$query= "select patient_id from bill";
$result=mysqli_query($db,$query);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Payment</title>
  <link rel="icon" href="icons8-Doctors Bag-40.png">
  <link rel="stylesheet" type="text/css" href="billp.css">
  <style type="text/css">div.error{background-color: red;opacity: 0.7;border :2px solid red;border-radius: 4px;position: relative;left: 100px;top:50px;width: 400px;}
  </style>
</head>
<body>
 <div id="log">
  <img src="loginlogo.png" style="position: relative;top: 30px;left :285px;opacity: 1"><br>
  <form method='post' action='pass.php' id='form'>
  Patient Id :<br>
  <select name="id">
      <option disabled selected value> -- select an option -- </option>
      <?php
      while($row=mysqli_fetch_array($result)){
        $pid=$row['patient_id'];
        echo "<option value='$pid'>".$pid."</option>";
      }?>
    </select><br><br>
  Status :<br><select name="stat">
      <option value="Paid">Paid</option>
      <option value="Not Paid">Not Paid</option>    
  </select><br><br>
  <button type='submit' name='stats'>Submit</button><br>

 </form>

 </div>
</body>
<script>
function myFunction() {
    var x = document.getElementById("nav");
    if (x.className === "") {
        x.className += " responsive";
    } else {
        x.className = "";
    }
}
function loc(){
  window.location.href="register.php";
}


</script>
</html>
