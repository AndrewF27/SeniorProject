<<<<<<< HEAD
<!DOCTYPE html>
<head>
        <link rel="stylesheet" href="../CSS/template.css">
        <link rel="stylesheet" href="../CSS/pages.css">
=======
<html>
<body>

<b>Search for Student Scores by Student Name or Score ID</b>
>>>>>>> b725185c2678c7ac283e1785f7e214789a03a411

</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<nav class="templateheader">
  <ul>
    <li><a href="http://retentionapp.club/" class="Homebutton"><div class="buttontext">RetentionApp</div></a></li>
    
    <li><a href="http://retentionapp.club/instructorDashboard.php" class="InsDashboard"><div class="buttontext">Instructor Dashboard</div></a></li>

</ul>
</nav>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
$output=NULL;

if(isset($_POST['submit'])) {

// Create connection
$mysqli = new mysqli ("mysql.retentionapp.club","retentionadmin","R3t3n@dm1n");

// Check connection
if ($mysqli === false) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
 }

 mysqli_select_db($mysqli,"retentionapp_login");

 $search = $mysqli->real_escape_string($_POST['search']);

 $resultSet = $mysqli->query("SELECT * FROM student_scores WHERE studentName LIKE '%$search%' OR quizID LIKE '%$search%'");
 echo "<b> <center>Student Scores</center> </b> <br> <br>";

    if ($resultSet->num_rows > 0) {
        while ($rows = $resultSet->fetch_assoc() ) {
        
         $scoreID = $rows['scoreID'];
         $studentName = $rows['studentName'];
         $quizID = $rows['quizID'];
         $score = $rows['score'];

         $output .= "<br />Score ID: $scoreID<br />Student Name: $studentName<br />Quiz ID: $quizID<br />Score: $score<br /><br />";
        
        }
    } else {
        $output = "No results";
    }
}

?>

<form method="POST">
<input type="TEXT" name="search" />
<input type="SUBMIT" name="submit" value="Search" />
</form>

<?php echo $output; ?>

<<<<<<< HEAD
<html>
=======
</body>
</html>
>>>>>>> b725185c2678c7ac283e1785f7e214789a03a411
