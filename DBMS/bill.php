<?php
$db=mysqli_connect('localhost','root','','dbms');
$query= "select Pat_id from appoinment";
$result=mysqli_query($db,$query);
?>
<!DOCTYPE html>
<html>
<head>

	<title>BILL</title>
  <link rel="icon" href="icons8-Doctors Bag-40.png">
	<link rel="stylesheet" type="text/css" href="bill.css">
</head>
<body>
 <div id="log">
  <img src="bill.jpg" style="position: relative;top: 40px;left :225px;opacity: 1"><br>
  <h1>BILL DETAILS</h1>
 <form method='post' action='pass.php' id='form'  name="myForm">
  <label id="name">BILL_NO :</label><br><input type="text" name="bill" placeholder="bill_no"><br><br>
  <label id="Bpat-id">PATEINT_ID :</label><br>
  <select name="Bpat_id">
      <option disabled selected value> -- select an option -- </option>
      <?php
      while($row=mysqli_fetch_array($result)){
        $pid=$row['Pat_id'];
        echo "<option value='$pid'>".$pid."</option>";
      }?>
    </select>
    <br><br>

  <label id="age">AMOUNT :</label><br><input type="text" name="amount" placeholder="amount" style="height: 30px;width: 200px";><br><br>
  <label id="status">STATUS :</label><br>
  <select name="status">
      <option value="Paid">Paid</option>
      <option value="Not Paid">Not Paid</option>    
  </select><br><br>
  <button type="submit" onclick ="valid()" name="add_bill">Submit</button><br>

 </form>;

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
var form=document.getElementById("form");
form.addEventListener("submit",valid,false);
function valid(){
    var x = document.forms["myForm"]["id"].value;
    var y = document.forms["myForm"]["password"].value;
    if ((x == null || x == "")) {
        form.innerHTML='<label id="logid">LOGIN ID : <span>enter the id</span></label><br><input type="text" name="id" placeholder="username"><br><br>'+
  '<label id="logpass">PASSWORD : <span>enter the password</span></label><br><input type="password" name="password" placeholder="password"><br><br>'+
  '<button type="submit" onclick ="valid()">Login</button><br>'+
  '<input type="checkbox" checked="checked"> Remember me'+
  '<br><br><br>'+
  '<button type="button" class="cancelbtn">Cancel</button>'+
  '<span class="psw">Forgot <a href="#">password?</a></span>';
     }
}

</script>
</body>

</html>
