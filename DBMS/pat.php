
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
  <link rel="icon" href="icons8-Doctors Bag-40.png">
	<link rel="stylesheet" type="text/css" href="pat.css">
</head>
<body>
 <div id="log">
  <img src="loginlogo.png" style="position: relative;top: 30px;left :285px;opacity: 1"><br>
  <h1>PATIENT DETAILS.</h1>
 <form method='post' action='pass.php' id='form'  name="myForm">
  <label id="name">NAME :</label><br><input type="text" name="name" placeholder="name"><br><br>
  <label id="pat-id">ID :</label><br><input type="text" name="pat-id" placeholder="id"><br><br>

  <label id="age">AGE :</label><br><input type="number" name="age" placeholder="age" style="height: 30px;width: 200px";><br><br>
  <label id="dob">DOB :</label><br><input type="date" name="dob" style="height: 30px;width: 200px;"><br><br>
 <label id="sex">SEX :</label><br><input type="radio" value="male" name="sex">male&nbsp;&nbsp;&nbsp;<input type="radio" name="sex" value="female">female<br><br>
  <label id="contact">CONTACT NO :</label><br><input type="number" name="contact" placeholder="number" style="height: 30px;width: 200px;"><br><br>
 <label id="address">ADDRESS :</label><br><textarea id="address" name="address" style="height: 80px;width: 500px;"></textarea><br><br>

  <button type="submit" onclick ="valid()" name="add_pat">Submit</button><br>
  <input type="checkbox" checked="checked"> Remember me
  <br><br><br>
  <button type="button" class="cancelbtn">Cancel</button>
  <span class="psw">Forgot <a href="#">password?</a></span>
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


</script>
</body>

</html>
