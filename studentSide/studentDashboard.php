<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/template.css">
        <link rel="stylesheet" href="../CSS/pages.css">
        
        <?php
        
        ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$connection = new mysqli ("mysql.retentionapp.club","retentionadmin","R3t3n@dm1n");
mysqli_select_db($connection,"retentionapp_login");
$importedrow = "Select * from quizStrings where id = 1";
$importedtext = mysqli_query($connection, $importedrow);
$importCheck = mysqli_num_rows($importedtext);
if ($importCheck > 0) {
    while ($row = mysqli_fetch_assoc($importedtext)) {
        $testest = $row['quiztext'];
 echo $testest;
    }
}
        ?>
        <input type="hidden" id="myPhpValue" value="<?php echo $testest ?>" />
    </head>
<meta charset= "UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<nav class="templateheader">
  <ul>
    <li><a href="#RetentionApp" class="Homebutton"><div class="buttontext">RetentionApp</div></a></li>
    
    <li><a href="login/login.html" class="Login"><div class="buttontext">Login</div></a></li>
</ul>
</nav>

<body>
    <br>
    <br>
    <br>
    <br>
    <p class="topHeader">Quiz Testing</p>
    <p class="subHeader">WIP</p>

    <p id="question"></p>
    <p id="after"></p>
    
    <button onclick="button()">Click here to answer</button>
    <form>
        <label for="studentAnswer">Submission</label>
        <br>
        <input type="text" id="studentAnswer" name="studentAnswer">
        <br>
    </form>

    <button onclick="previous()">previous</button>
    <button onclick="next()">next</button>
    <br>
    <button onclick="submit()">submit</button>

    <p id="score"></p>
    <p id="test"></p>
    <p id="score"></p>
    
    <script src="studentQuiz.js">
    </script>
    
<?php

?>
<script>
    var testText = $("#myPhpValue").val();

document.getElementById("question").innerHTML = testText;

var testTextSplit = testText.split(" "); //Makes each word in 'testText' an item in an array

function exporttext (exported) {
testText = exported;
    return;
}

//document.write(randomWordCount);
//document.getElementById("question").innerHTML = randomWord;
//Question & Answer Generation
var question1 = "How many times does the word ";
var question2 = " appear in the test text?";
var questionTotal = question1.concat(randomWord, question2);

//Question Number Variables
var questionCount = 4; //number of questions/ answers generated
var questionNumber = 0; //current question number (e.g. Question 1, Question 1... etc.)
var questionBank = []; //array of questions
var questionAnswers = []; //array of corresponding answers

for (j = 0; j < questionCount; j++) {

    var randomWord = testTextSplit[Math.floor(Math.random()*testTextSplit.length)];

function button() {
    var answer = prompt(questionTotal);
    var answer1 = "Correct! The word "
    var answer2 = "Incorrect! The word "
    var answer3 = " appears "
    var answer4 = " time(s)!"
    var answerTotal = answer1.concat(randomWord, answer3, randomWordCount, answer4);
    var answerTotal2 = answer2.concat(randomWord, answer3, randomWordCount, answer4);
    if (answer == randomWordCount) {
        document.getElementById("test").innerHTML = answerTotal;
        score++;
        document.getElementById("score").innerHTML = ("Your score is " + score);
    } 
    else {
        document.getElementById("test").innerHTML = answerTotal2;
        document.getElementById("score").innerHTML = ("Your score is " + score);
    //String Sifter/ Answer assignment
    var randomWordCount = 0;
    for (i = 0; i < testTextSplit.length; i++) { //counts occurences of randomWord
        if (testTextSplit[i] == randomWord) {
            randomWordCount = randomWordCount + 1;
        }
    }
    questionAnswers.push(randomWordCount);

    //Question & Answer Generation
    var question1 = "How many times does the word '";
    var question2 = "' appear in the test text?";
    var questionTotal = question1.concat(randomWord, question2);
    questionBank.push(questionTotal);
    //document.getElementById("after").innerHTML = questionBank;

    var answer1 = "The word ";
    var answer2 = " appears ";
    var answer3 = " time(s)!";
    var answerTotal = answer1.concat(randomWord, answer2, randomWordCount, answer3);
    //document.getElementById("after").innerHTML = answerTotal;

}
}
document.getElementById("after").innerHTML = questionBank[questionNumber];
document.getElementById("test").innerHTML = questionAnswers;

//Awarding Points
var studentAnswers = [];
var studentResponse = 0;
var score = 0;
/*if (studentResponse == questionAnswers[questionNumber]) {
    score++;
}
else {
    document.write("Oops, incorrect!");
}
*/
//Page Refreshing
/*
var quizActive = 1;
while (quizActive != 1) {
    location.reload()
}
*/













function previous() {
    if (questionNumber > 0) {
        questionNumber = questionNumber - 1;
        document.getElementById("after").innerHTML = questionBank[questionNumber];
    }
}

function next() {
    if (questionNumber < questionCount) {
        studentResponse = document.getElementById("studentAnswer").value;
        studentAnswers.push(studentResponse);
        questionNumber = questionNumer + 1;
        document.getElementById("after").innerHTML = questionBank[questionNumber];
    }
}

// checks student answer array against question answer array then gives out score.
function submit() {
    for (s = 0; s < questionNumber; s++){
        if (studentAnswers[s] == questionAnswers[s]){
            score++;
        }
    }
    document.getElementById("score").innerHTML = score;
}

function changestring() {
    testText = document.getElementById("quiztext").value;
    return;
    }

function testdisplay(testing) {
    
    document.write(testing);
    return;
}}
</script>
</body>
</html>