<?php
$FirstName = "FirstName";
$LastName = "LastName";
$Score = "Score";

// Create connection
$connection = new mysqli ("mysql.retentionapp.club","retentionadmin","R3t3n@dm1n");

// Check connection
if ($connection -> connect_errno) {
    echo "Failed to connect to MySQL: " . $connection -> connect_error;
    exit();
}

//select database
mysqli_select_db($connection,"retentionapp_login");

$sql = "SELECT FirstName, LastName, Score FROM /*Database*/";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Name: " . $row["firstname"]. " " . $row["lastname"] . " Score: " . $row["score"]. "<br>";
    }
} else {
    echo "No results found for this name.";
}

?>