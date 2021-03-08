<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="CSS/template.css">
    <link rel="stylesheet" href="CSS/pages.css">
    <script src="studentSide/studentQuiz.js"></script>
</head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<nav class="templateheader">
  <ul>
    <li><a href="http://retentionapp.club/" class="Homebutton"><div class="buttontext">RetentionApp</div></a></li>
    
    <li><a href="http://retentionapp.club/Student_Scores/showscore.php" class="Scores"><div class="buttontext">Student Scores</div></a></li>
</ul>
</nav>

<body>
    <br>
    <br>
    <br>
    <br>
    <p class="topHeader">Hello, Instructor</p>
    <p class="subHeader">To enable attendance quiz, select course and toggle switch</p>

    <br>

    <div class="section">
        <p class="sectionHeader">Available Courses</p>
        <hr>
        <ul class="courses">
            <li>Sample Course 1</li>
            <li>Sample Course 2</li>
            <li>Sample Course 3</li>
        </ul>
    </div>

    <br>
    <br>

    <div>
        <p style="text-align:center; font-family: Arial, Helvetica, sans-serif; font-size: 1.2em;">Quiz is ready</p>
    </div>

    <form actions="" method="POST" action="textExport.php">
        <div class="quiztext">

            <label for="Quiztext"><b>Quiz Text</b></label>
            <input type="text" placeholder="Enter quiz text" id="quiztext" name="quiztext" required>

            <input type="submit" value="Submit" name="submit" onclick="changestring();"></input>

            
        </div>
    </form>
    <script>
        
    </script>
    <form actions="" method="POST" action="textDelete.php">
    <label for="deleteText"><b>Reset Quiz</b></label>
    <input type="submit" value="Reset" name="deleteText">
</form>
    <?php
    //if(isset($_POST['delete'])) {
        //$connection = new mysqli ("mysql.retentionapp.club","retentionadmin","R3t3n@dm1n");
        //mysqli_select_db($connection,"retentionapp_login");
        //$delete = mysqli_query("Delete FROM quizStrings");
        //$connection->close();
    //}
        ?>
</body>

</html>