<?php
$db=mysqli_connect('localhost','root','','dbms');
$query= "select room_no from reservation;";
$result=mysqli_query($db,$query);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Checkout</title>
  <link rel="icon" href="icons8-Doctors Bag-40.png">
  <link rel="stylesheet" type="text/css" href="billp.css">
  <style type="text/css">div.error{background-color: red;opacity: 0.7;border :2px solid red;border-radius: 4px;position: relative;left: 100px;top:50px;width: 400px;}
  </style>
</head>
<body>
 <div id="log">
  <img src="loginlogo.png" style="position: relative;top: 30px;left :285px;opacity: 1"><br>
  <form method='post' action='pass.php' id='form'>
  Room :<br>
  <select name="room">
      <option disabled selected value> -- select an option -- </option>
      <?php
      while($row=mysqli_fetch_array($result)){
        $r=$row['room_no'];
        echo "<option value='$r'>".$r."</option>";
      }?>
    </select><br><br>
  <button type='submit' name='ck'>Checkout</button><br>

 </form>

 </div>
</body>
</html>
