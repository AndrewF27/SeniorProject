<?php
$email = $_POST["email"];
$pass = $_POST ["password"];

//Attempts to connect to database using mysqli
//Still need to figure out database location
$connection = new mysqli("localhost","dh_rpwwdr","R3t3n@dm1n,retentionapp_login");

//Check connection to database
if ($connection -> connect_errno) {
    echo "Failed to connect to MySQL: " . $connection -> connect_error;
    exit();
  }

$result = mysql_query("Select teacherName, teacherPass, teacherEmail");

$row = mysql_fetch_array($result);

if($row["email"]==$email && $row["password"]==$pass)
    echo"Login Successful.";
else
    echo"Sorry, login failed. Please try again.";
?>