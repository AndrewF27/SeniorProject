<!DOCTYPE html>
<html>

<?php
// Create connection
$mysqli = new mysqli ("mysql.retentionapp.club","retentionadmin","R3t3n@dm1n");

// Check connection
if ($mysqli === false) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

mysqli_select_db($mysqli,"retentionapp_login");

$sql = "SELECT * FROM student_scores";
echo "<b> <center>Student Scores</center> </b> <br> <br>";

echo '<table border="0" cellspacing="2" cellpadding="2">
      <tr>
            <td> <front face="Arial">Score ID</front> </td>
            <td> <front face="Arial">Student Name</front> </td>
            <td> <front face="Arial">Quiz ID</front> </td>
            <td> <front face="Arial">Score</front> </td>
        </tr>';

if ($result = $mysqli->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $scoreID = $row["scoreID"];
        $studentName = $row["studentName"];
        $quizID = $row["quizID"];
        $score = $row["score"];

        echo '<tr>
                <td>'.$scoreID.'</td>
                <td>'.$studentName.'</td>
                <td>'.$quizID.'</td>
                <td>'.$score.'</td>
             </tr>';
        
    }
    // Free result set
    $result->free();

}

$mysqli->close();
?>

</body>
</html>
