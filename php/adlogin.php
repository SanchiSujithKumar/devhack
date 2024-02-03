<!DOCTYPE HTML>
<html>
<head>
  <title>token</title>
<script>
function geit(){
        location.href="ind.php";
}
function geeit(){
        location.href="user.php";
}
</script>
</head>
<body>
<h1>WELCOME TO "website"</h1>
<form method="POST" action="zara.php" >
<div class="container">
        <!-- <br><br> -->
        <h3> Admin Login </h3>
        <label for="uname" id="sss"><b> E-mail :</b></label>
        <input type="email" name="uname" placeholder="Enter Email" required /><br><br>
        <label for="psw" id="sss"><b>Password:</b></label>
        <input type="password" name="pass" placeholder="Enter password" required /><br><br>
        <input type="submit" name="submit" id="bbb" value="Log-in"><br> </p>
        <!-- <ul style="list-style-type:none"> -->
<div id="two">
	<p style="color:white">Did not register?</p>
        <button type="button" onclick="geit()" style="padding-left:40px;padding-right:40px;">  Register  </button><br>
        </div>
<div id="two">        
	<p style="color:white">Are you a Student?</p>
	<button type="button" onclick="geeit()">GoTo-Student</button>
</div>
</form>
</body>
</html>