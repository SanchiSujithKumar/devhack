<!-- manikanta -->
<!DOCTYPE HTML>
<html>
<head>

<?php
session_start();

 if (isset($_POST['submit'])) {
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname="credentials";
   $conn = new mysqli($servername, $username, $password,$dbname);
     $x=$_POST['uname'];
     $y=$_POST['pass'];
     $sql="SELECT * FROM `employes` WHERE (email='$x')&&(password='$y')";
     $result=$conn->query($sql);
     if ($result->num_rows > 0) {
         while ($row =$result-> fetch_assoc()) {
          $_SESSION['sn']=$row['name'];
          echo "<h1 '>Welcome ".$_SESSION['sn']."</h1>";
         }
        //  echo "  <fieldset style='margin-top:100px;margin-right:15%;margin-left:15%' > <legend>SELECT</legend><button value='StudentList' onclick='listit()' class='button'><h3>Student List</h3></button><br><br><button value='GOTO-EXAM' onclick='goin()' class='button'><h3>TO EXAM PAGE</h3></button><br><br>
        //  <button value='logout' onclick='back()'class='button' ><h3>LOGOUT</h3></button></fieldset>";
        
        
        }
         else{
           echo " invalid credentials." ;
           echo "<button value='logout' onclick='back()' ><h3>BACK</h3></button> ";
         }
         
            }
?>
 <p><br></p>
<!-- <?php

// if(isset($_POST['mani'])){
//   echo "  <fieldset> <legend>YOU ARE THINKING!</legend><button value='StudentList' onclick='listit()' class='button'><h3>Student List</h3></button><br><br><button value='GOTO-EXAM' onclick='goin()' class='button'><h3>TO EXAM PAGE</h3></button><br><br><br>
//   <button value='logout' onclick='back()'class='button' ><h3>LOGOUT</h3></button></fieldset>";
// }


?> -->
    
 <!-- <button value="StudentList" onclick="listit()"><h3>Student List</h3></button><br><br> -->
 <!-- <button value="GOTO-EXAM" onclick="goin()" ><h3>Go To EXAM page</h3></button><br><br>
 <button value="logout" onclick="back()" ><h3>LOGOUT</h3></button>  -->
<!--  
 <script>
 
function back()
  {
  location.href = "index.php";  
  }
function goin()
{
  location.href = "subjectenterpage.php";
}
function listit()
{
  location.href="stlist.php";
}
 </script>
 <p style="text-align:center;">© Acad OES.</p> -->
</body>
</html>

