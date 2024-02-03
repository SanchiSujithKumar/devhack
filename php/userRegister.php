<!DOCTYPE HTML>
<html>
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
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: 10px;
    text-align: center;
  }

  .user {
    display: flex;
    justify-content: center;
    text-align: center;
    margin-bottom: 10px;
  }

  .main-nav {
    text-align: center;
  }

  h1 {
    margin-bottom: 20px;
  }

  label {
    display: block;
    margin-bottom: 1px;
    color: #333;
  }

  input {
    padding: 10px;
    margin-bottom: 1px;
    width: 100%;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  #bbb {
    padding: 10px;
    width: 50%;
    box-sizing: border-box;
    border: none;
    border-radius: 5px;
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
    margin: 10px auto;
  }

  #bbb:hover {
    background-color: #45a049;
  }

  #two {
    margin-top: 10px;
  }

  #out {
    padding: 10px;
    width: 50%;
    box-sizing: border-box;
    border: none;
    border-radius: 5px;
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
    margin: 10px auto;
  }

  #out:hover {
    background-color: #45a049;
  }

</style>
<body>
<div id="container">

  <h1>Registration Page</h1>

  <form method="POST">
    <!-- <br><br> -->
    <label for="name"><b></b></label>
    <input type="text" name="name" placeholder="Enter Name" required /><br><br>
    <label for="rno"><b></b></label>
    <input type="text" name="rno" placeholder="Enter Mobile" required /><br><br>
    <label for="uname"><b></b></label>
    <input type="email" name="uname" placeholder="Enter Email" required /><br><br>
    <label for="pass"><b></b></label>
    <input type="password" name="pass" placeholder="Enter Password" required /><br><br>
    <input type="submit" name="submit" id="bbb" value="Submit"><br> </p>
  </form>

  <button value="login" id="out" onclick="back()">LOGIN</button> 

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "credentials";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "CREATE TABLE IF NOT EXISTS staccounts (
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
    $fname = $_POST['name'];
    $rollno = $_POST['rno'];
    $lname = $_POST['uname'];
    $age = $_POST['pass'];
    $sql = "INSERT INTO staccounts VALUES ('$fname','$rollno','$lname','$age')";
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  $conn->close();
  ?>

  <script>
    function back() {
      location.href = "user.php";
    }
  </script>

</div>

</body>
</html>