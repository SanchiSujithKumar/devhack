
<!DOCTYPE HTML>
<html>


<body style="background-color:#e4f9f5;text-align:center;"
                 >
  <fieldset style="margin-right:50%";>
    <legend>REGISTER HERE</legend>
<form method="POST" style="text-align:left">
        name:<input  type="text" name="name" required /><br><br>
        E-mail:<input type="email" name="uname" required /><br><br>
        password:<input type="password" name="pass" required /><br><br>
        phonenumber:<input type="number" name="pass1" required /><br><br>
  
  <button class="button" name="submit">SUBMIT</button>

</fieldset>
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
else{echo"connected";}
// sql to create database
$sql="CREATE DATABASE IF NOT EXISTS credentials";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
  } else {
    echo "Error creating database: " . $conn->error;
  }
  $dbname = "credentials";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);}
  $sql = "CREATE TABLE IF NOT EXISTS employes (
   name varchar(68),
   email varchar(68),
   password varchar(68),
phonenumber varchar(68)
   )";
        if ($conn->query($sql) === TRUE) {
          echo "Table created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        } 

        if (isset($_POST['submit'])) {
            $fname=$_POST['name'];
            $lname=$_POST['uname'];   
            $age=$_POST['pass'];
            $cn=$_POST['pass1'];
            $sql = "INSERT INTO employes VALUES ('$fname','$lname','$age','$cn')";
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
	location.href = "adlogin.php";	
	}

</script>
<div style="margin-left:200px;
margin-top :20px;
"> 
<button Value="login" onclick="back()" class="button">Go To Admin Page</button>	
</div>
 
    
      <p style="text-align:center;margin-top :240px">© Acad OES.</p>
  

        </body>
</html>