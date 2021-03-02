<?php
// Create connection
$connection = new mysqli ("mysql.retentionapp.club","retentionadmin","R3t3n@dm1n");

// Check connection
if ($connection === false) {
    die("ERROR: Could not connect. " . $connection->connect_error);
}

mysqli_select_db($connection,"retentionapp_login");

$sql = "SELECT scoreID, studentName, quizID, score FROM student_scores";

if ($result->num_rows > 0) {
    if($result = $connection->query($sql)){
        if($result->num_rows > 0){
            echo "<table>";
                echo "<tr>";
                    echo "<th>scoreID</th>";
                    echo "<th>studentName</th>";
                    echo "<th>quizID</th>";
                    echo "<th>score</th>";
                echo "</tr>";
            while($row = $result->fetch_array()){
                echo "<tr>";
                    echo "<td>" . $row['scoreID'] . "</td>";
                    echo "<td>" . $row['studentName'] . "</td>";
                    echo "<td>" . $row['quizID'] . "</td>";
                    echo "<td>" . $row['score'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // Free result set
            $result->free();
        } else{
            echo "No records matching your query were found.";
        }
} else {
    echo "ERROR: Could not execute. Please try again $sql. " . $mysqli->error;
}

$connection->close();
?>