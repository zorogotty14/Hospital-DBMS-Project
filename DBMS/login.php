<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="icon" href="icons8-Doctors Bag-40.png">
  <link rel="stylesheet" type="text/css" href="login.css">
  <style type="text/css">div.error{background-color: red;opacity: 0.7;border :2px solid red;border-radius: 4px;position: relative;left: 100px;top:50px;width: 400px;}</style>
</head>
<body>
 <div id="log">
  <img src="loginlogo.png" style="position: relative;top: 30px;left :285px;opacity: 1"><br>
  <form method='post' action='pass.php' id='form'>
  LOGIN ID :<br><input type='text' name='id' placeholder='username'><br><br>
  PASSWORD :<br><input type='password' name='password' placeholder='password'><br><br>
  <button type='submit' name='login_user'>Login</button><br>
  <input type='checkbox' checked='checked'> Remember me
  <br><br><br>
  <button type='button' class='cancelbtn'>Cancel</button><span class='psw'>Forgot <a href='#'>password?</a></span>
  <br><br><br>would you like to sign up ?<br>
  <button type='button' name='signup' onclick='loc()'>Sign Up</button><br> 
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
