<?php
$string = $_POST["quiztext"];

//Attempts to connect to database using mysqli
$connection = new mysqli ("mysql.retentionapp.club","retentionadmin","R3t3n@dm1n");

//Check connection to database
if ($connection -> connect_errno) {
    echo "Failed to connect to MySQL: " . $connection -> connect_error;
    exit();
  }
 //select database
  mysqli_select_db($connection,"retentionapp_login");

$sql = "INSERT INTO quiztext (id, quiztext)
VALUES ('1', '$string')";

if ($connection->query($sql) === TRUE) {
    echo "New quiz created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $connection->error;
  }
  
  $connection->close();
?>