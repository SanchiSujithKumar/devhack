<!DOCTYPE HTML>
<html>
<head>
<title>token</title>

<script>
function geit(){
        location.href="stregister.php";
}
function geeit(){
        location.href="adlogin.php";
}
</script>
</head>
<body>

<h1> WELCOME TO token</h1>
<form method="POST" action="tryst.php" class="main-nav">
<div class="container">
		<!-- <br><br> -->
        <h3> For Students:</h3>
		<label for="uname"id="sss"><b>E-mail :</b></label>
		<input type="email" name="uname" placeholder="Enter Email"><br><br>
		<label for="psw" id="sss"><b>Password:</b></label>
		<input type="password" name="pass" placeholder="Enter Password"><br><br>
        <input type="submit" name="submit" id="bbb" value="Log-in"><br> </p>
        <div id="two">
	<p style="color:white">Did not register?</p>
        <button type="button" onclick="geit()" style="padding-left:40px;padding-right:40px;">  Register  </button><br>
        </div>
<div id="two">        
	<p style="color:white">Are you a Admin?</p>
	<button type="button" onclick="geeit()">GoTo-Admin</button>
</div>


</form>
</body>
</html>