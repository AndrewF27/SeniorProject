<html>
<body>
<?php
$username = "retentionadmin"
$password = "password"
$database = "mysql.retentionapp.club"

// Create connection
$mysqli = new mysqli ("mysql.retentionapp.club","retentionadmin","R3t3n@dm1n");

// Check connection
if ($connection === false) {
    die("ERROR: Could not connect. " . $connection->connect_error);
}

mysqli_select_db($connection,"retentionapp_login");

$sql = "SELECT * FROM student_scores";
echo "<b> <center>Student Scores</center> </b> <br> <br>";

if ($result = $mysqli->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $scoreID = $row["col1"];
        $studentName = $row["col2"];
        $quizID = $row["col3"];
        $score = $row["col4"];

        echo '<b>'.$scoreID.$studentName.'</b><br />';
        echo $quizID.'<br />';
        echo $score;
    }
    // Free result set
    $result->free();

}

$connection->close();
?>
</body>
</html>