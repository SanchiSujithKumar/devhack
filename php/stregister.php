
<!DOCTYPE HTML>
<html>


<body>
<button value="login" id="out" onclick="back()">LOGIN</button> 
  <h1>Registration Page</h1>


  <div class="container">
<form method="POST">
       <br><br> name:<input type="text" id ="bbb" name="name" required /><br><br>
	mobile:<input type="text" id ="bbb" name="rno" required /><br><br>
        E-mail:<input type="email" id ="bbb" name="uname" required /><br><br>
        password:<input type="password" id ="bbb" name="pass" required /><br><br>
        submit:<input type="submit"  id ="bbb" name="submit"><br>
        </div>
</form>
 
<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// else{echo"connected";}
// sql to create database
$sql="CREATE DATABASE IF NOT EXISTS credentials";
if ($conn->query($sql) === TRUE) {
    // echo "Database created successfully";
  } else {
    echo "Error creating database: " . $conn->error;
  }
  $dbname = "credentials";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);}
  $sql = "CREATE TABLE IF NOT EXISTS useraccounts (
   name varchar(68),
   mobile varchar(68),
   email varchar(68),
   password varchar(68)
   )";
        if ($conn->query($sql) === TRUE) {
          // echo "Table created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        } 

        if (isset($_POST['submit'])) {
            $fname=$_POST['name'];
            $lname=$_POST['uname']; 
	    $rollno=$_POST['rno'];  
            $age=$_POST['pass'];
            $sql = "INSERT INTO staccounts VALUES ('$fname','$rollno','$lname','$age')";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }  
         }
        $conn->close();
        ?>
        <br>
        <!-- <a href="admin.php">admin page</a>   -->




        <script>
function back()
	{
	location.href = "user.php";	
	}

</script>
<!-- <div style="margin-left:200px;
margin-top :20px;
">  -->
<!-- <button value="login" onclick="back()"><- Go to Log-in page</button> 	 -->

        </body>
</html>