<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/template.css">
        <link rel="stylesheet" href="../CSS/pages.css">
        <!-- <?php
        //include ('studentDashboard.php');
        //?> -->
        <?php 
$connection = new mysqli ("mysql.retentionapp.club","retentionadmin","R3t3n@dm1n");
mysqli_select_db($connection,"retentionapp_login");
$importedrow = "Select * from quizStrings where id = 1";
$importedtext = mysqli_query($connection, $importedrow);
$importCheck = mysqli_num_rows($importedtext);
if ($importCheck > 0) {
    while ($row = mysqli_fetch_assoc($importedtext)) {
        $testest = $row['quiztext'];
 //echo $testest;
 
    }
}
?>


    </head>
<meta charset= "UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<nav class="templateheader">
  <ul>
    <li><a href="http://retentionapp.club/" class="Homebutton"><div class="buttontext">RetentionApp</div></a></li>
    
    <li><a href="login/login.html" class="Login"><div class="buttontext">Login</div></a></li>
</ul>
</nav>

<body>
    <br>
    <br>
    <br>
    <br>
    <p class="topHeader">Quiz Testing</p>
    <p class="subHeader">Quiz in Progress</p>

    <div id="quizHeader">
        <p id="questionNumber"></p>
    </div>

    <div id="quizSpace">
        <p id="question"></p>
        <p id="display"></p>
        <p id="response"></p>
    
        <!--<button onclick="button()">Click here to answer</button>-->

        <form>
            <label for="studentAnswer">Submission</label>
            <br>
            <input type="number" id="studentAnswer" name="studentAnswer">
            <br>
        </form>
        <br>

        <button onclick="previous()">previous</button>
        <button onclick="next()">next</button>
        <br>
        <button onclick="submit()">submit</button>

        
        <p id="score"></p>
        <p id="test"></p>
        <p id="score"></p>

        <br>
        <p id="checkAnswer"></p>
        <p id="attendance"></p>

        <button onclick="checkAnswerArray()">Check Entered Answers</button>
        <button onclick="calculateAttendance()">Attendance Verdict</button>
    </div>
 <script>
     //Input
//var testText = $("#myPhpValue").val();
var testText = '<?php echo $testest; ?>';

document.getElementById("display").innerHTML = testText;

var testTextSplit = testText.split(" "); //Makes each word in 'testText' an item in an array

//Question Number Variables
var questionCount = 4; //number of questions/ answers generated
var questionArrayValue;
var questionNumber = 0; //current question number (e.g. Question 1, Question 1... etc.)
var questionBank = []; //array of questions
var questionAnswers = []; //array of corresponding answers

var randomWord; // the random word selected to be counted
var randomWordCount; // the count of the random word
var questionTotal; // the generated question

var duplicate = 0;
var duplicateCounter = 0;

document.getElementById("questionNumber").innerHTML = ("Question " + (questionNumber + 1));

for (j = 0; j < questionCount; j++) {
        // randomizes word question is based on
        randomWord = testTextSplit[Math.floor(Math.random()*testTextSplit.length)];

        // reset word count between each word's loop
        randomWordCount = 0;

        //String Sifter/ Answer assignment
        for (i = 0; i < testTextSplit.length; i++) { //counts occurences of randomWord
            if (testTextSplit[i] == randomWord) {
                randomWordCount ++;
            }
        }

        // Question Generation
        var question1 = "How many times does the word '";
        var question2 = "' appear in the following text?";
        questionTotal = question1.concat(randomWord, question2);

        // Answer Generation (Only used for testing)
        var answer1 = "The word ";
        var answer2 = " appears ";
        var answer3 = " time(s)!";
        var answerTotal = answer1.concat(randomWord, answer2, randomWordCount, answer3);
        
        // Ensures non-repeating values (WIP)
        for (s = 0; s < questionCount; s++){
            if (questionTotal == questionBank[s]){
                duplicateCounter++; // compensates for cases where j value gets more and more negative
                j = j - 1 + duplicateCounter;
                break;
            }

        }
        
    // Fills Question/ Answer arrays with values
    questionBank.push(questionTotal);
    questionAnswers.push(randomWordCount);
}

//displays question corresponding to questionNumber value
document.getElementById("question").innerHTML = (questionBank[questionNumber]);
//document.getElementById("response").innerHTML = ("Answer Key: " + questionAnswers);
//document.write(questionBank);

//Awarding Points
var studentAnswers = [];
var studentAnswer = 0;
var score = 0;









// functions
function previous() { // going backward one question
    if (questionNumber != 0) {
        questionNumber --;
        document.getElementById("question").innerHTML = (questionBank[questionNumber]);
        document.getElementById('studentAnswer').value = (studentAnswers[questionNumber]);
        document.getElementById('questionNumber').innerHTML = ("Question " + (questionNumber + 1));
    }
    else {
        questionNumber = questionNumber;
    }
}

function next() { // going forward one question
    if (questionNumber != questionCount-1) {
        studentAnswer = document.getElementById("studentAnswer").value;
        studentAnswers.push(studentAnswer);
        //document.write(studentAnswer);
        questionNumber++;
        document.getElementById("question").innerHTML = (questionBank[questionNumber]);
        //if (studentAnswers[questionNumber] != null) {
            document.getElementById('studentAnswer').value = (studentAnswers[questionNumber]);
        //}
        document.getElementById("questionNumber").innerHTML = ("Question " + (questionNumber + 1));
        document.getElementById("studentAnswer").value = ('');
    }
    else {

    }
}

// checks student answer array against question answer array then gives out score.
function submit() {
    studentAnswer = document.getElementById("studentAnswer").value;
    studentAnswers.push(studentAnswer);

    score = 0;
    for (s = 0; s < questionCount; s++){
        if (studentAnswers[s] == questionAnswers[s]){
            score++;
        }
    }
    document.getElementById("score").innerHTML = ("Total Correct: " + score);
}

// reveals answer array (Testing)
function checkAnswerArray() {
    document.getElementById("checkAnswer").innerHTML = studentAnswers;
}

// calculating whether or not user was counted for attendance depending on score
function calculateAttendance() {
    var attendance;
    var scorePercentage;

    scorePercentage = ((score * 10) / (questionCount * 10));
    document.getElementById("attendance").innerHTML = (scorePercentage);
    if ((scorePercentage > 0.5)) {
        attendance = "was";
    }
    else {
        attendance = "wasn't";
    }
    document.getElementById("attendance").innerHTML = ("User's score was " + scorePercentage + " so user " + attendance + " here");
}

// Rasheed Testing
function changestring() {
    testText = document.getElementById("quiztext").value;
    return;
    }

function testdisplay(testing) {
    
    document.write(testing);
    return;
}

function exporttext (exported) {
    testText = exported;
        return;
    }
 </script>
</body>
</html>