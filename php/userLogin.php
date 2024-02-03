<!DOCTYPE HTML>
<html>
<head>
<title>token</title>
<style>
	body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
	}

        #container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border: 2px solid rgba(255, 255, 255, 0.3);
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }

        .student {
            display: flex;
            justify-content: center;
            text-align: center;
            margin-bottom: 20px;
        }

        .main-nav {
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

		label {
        display: block;
        margin-bottom: 5px;
        color: #333;
    }

		input {
			padding: 10px;
			margin-bottom: 15px;
			width: 100%;
			box-sizing: border-box;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		#bbb {
			padding: 10px;
			width: 100%;
			box-sizing: border-box;
			border: none;
			border-radius: 5px;
			background-color: #4CAF50;
			color: white;
			cursor: pointer;
		}

		#bbb:hover {
			background-color: #45a049;
		}

		#two {
        	margin-top: 15px;
    	}

</style>
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

<div id="container">
<h1 style="text-align:center;"> WELCOME TO token</h1>
<form method="POST" action="tryst.php" class="main-nav">
		<!-- <br><br> -->
        <h3 class="student"> For Users</h3>
		<label for="uname"id="sss"><b></b></label>
		<input type="email" name="uname" placeholder="Enter Email"><br><br>
		<label for="psw" id="sss"><b></b></label>
		<input type="password" name="pass" placeholder="Enter Password"><br><br>
        <input type="submit" name="submit" id="bbb" value="Log-in"><br> </p>
        <div id="two">
	<p style="color:black">Did not register?</p>
        <button type="button" onclick="geit()" style="padding-left:40px;padding-right:40px;">  Register  </button><br>
        </div>
<div id="two">
	<p style="color:black">Are you a Admin?</p>
	<button type="button" onclick="geeit()">GoTo-Admin</button>
</div>


</form>
</body>
</html>