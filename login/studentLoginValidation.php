<?php
$email = $_POST["studentEmail"];
$pass = $_POST["studentPass"];
ini_set('display_errors', 1);

//Attempts to connect to database using mysqli
$connection = new mysqli ("mysql.retentionapp.club","retentionadmin","R3t3n@dm1n");

//Check connection to database
if ($connection -> connect_errno) {
    echo "Failed to connect to MySQL: " . $connection -> connect_error;
    exit();
  }
 //select database
  mysqli_select_db($connection,"retentionapp_login");

$result = mysqli_query($connection, "SELECT * FROM student_login WHERE studentEmail = '$email' and studentPass = '$pass'");

$stmt = $connection -> prepare("SELECT * FROM student_login WHERE studentEmail = ?");
$stmt -> bind_param('s', $_POST['studentEmail']);
$stmt = execute();
$resultt = $stmt -> get_result();
$user = $resultt -> fetch_object();

$rows = mysqli_num_rows($result);
if($rows == 1) {
    $_SESSION['user_id'] = $user -> ID;
    header("Location: http://retentionapp.club/studentDashboard.html");
    echo"Login Successful.";
}
else{
    echo"Sorry, login failed. Please try again.";
}
    
?>
