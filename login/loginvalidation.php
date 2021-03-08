<?php
$email = $_POST["teacherEmail"];
$pass = $_POST["teacherPass"];
ini_set('display_errors', 1);

//Attempts to connect to database using mysqli
//Still need to figure out database location
$connection = new mysqli ("mysql.retentionapp.club","retentionadmin","R3t3n@dm1n");

//Check connection to database
if ($connection -> connect_errno) {
    echo "Failed to connect to MySQL: " . $connection -> connect_error;
    exit();
  }
 //select database
  mysqli_select_db($connection,"retentionapp_login");

$result = mysqli_query($connection, "SELECT * FROM teacher_login WHERE teacherEmail = '$email' and teacherPass = '$pass'");

$rows = mysqli_num_rows($result);
if($rows == 1) {
    header("Location: http://retentionapp.club/instructorDashboard.php");
    echo"Login Successful.";
}
else{
    echo"Sorry, login failed. Please try again.";
}
    
?>
