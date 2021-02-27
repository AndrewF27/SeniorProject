//Input
var testText = "This is a test test test sentence sentence to test the text text sifting and quiz quiz algorithm creation algorithm";

document.getElementById("display").innerHTML = testText;

var testTextSplit = testText.split(" "); //Makes each word in 'testText' an item in an array

//document.write(randomWordCount);
//document.getElementById("question").innerHTML = randomWord;
//Question & Answer Generation
var question1 = "How many times does the word ";
var question2 = " appear in the test text?";
var questionTotal = question1.concat(randomWord, question2);

//Question Number Variables
var questionCount = 4; //number of questions/ answers generated
var questionArrayValue;
var questionNumber = 0; //current question number (e.g. Question 1, Question 1... etc.)
var questionBank = []; //array of questions
var questionAnswers = []; //array of corresponding answers

for (j = 0; j < questionCount; j++) {

    var randomWord = testTextSplit[Math.floor(Math.random()*testTextSplit.length)];


   /* //var answer = prompt(questionTotal);
    var answer1 = "Correct! The word "
    var answer2 = "Incorrect! The word "
    var answer3 = " appears "
    var answer4 = " time(s)!"
    var answerTotal = answer1.concat(randomWord, answer3, randomWordCount, answer4);
    var answerTotal2 = answer2.concat(randomWord, answer3, randomWordCount, answer4);
    */

    var randomWordCount = 0;

    /*
    if (answer == randomWordCount) { //if answer is equal to stored answer(randomWordCount)
        document.getElementById("test").innerHTML = answerTotal;
        score++;
        document.getElementById("score").innerHTML = ("Your score is " + score);
    } 
    else {
        document.getElementById("test").innerHTML = answerTotal2;
        document.getElementById("score").innerHTML = ("Your score is " + score);
    }
    */

    //String Sifter/ Answer assignment

    for (i = 0; i < testTextSplit.length; i++) { //counts occurences of randomWord
        if (testTextSplit[i] == randomWord) {
            randomWordCount ++;
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

//displays question corresponding to questionNumber value
document.getElementById("question").innerHTML = questionBank[questionNumber];
document.getElementById("response").innerHTML = questionAnswers;
document.write(questionBank);

//Awarding Points
var studentAnswers = [];
var studentAnswer = 0;
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
    if (questionNumber != 0) {
        questionNumber --;
        document.getElementById("question").innerHTML = (questionBank[questionNumber]);
        document.getElementById('studentAnswer').value = (studentAnswers[questionNumber]);
    }
    else {
        questionNumber = questionNumber;
    }
}

function next() {
    studentAnswer = document.getElementById("studentAnswer").value;
    studentAnswers.push(studentAnswer);

    if (questionNumber < questionCount-1) {
        //document.write(studentAnswer);
        questionNumber++;
        document.getElementById("question").innerHTML = (questionBank[questionNumber]);
        //if (studentAnswers[questionNumber] != null) {
            document.getElementById('studentAnswer').value = (studentAnswers[questionNumber]);
        //}
    }
    else {

    }
    document.getElementById("studentAnswer").value = ('');
}

function checkAnswerArray() {
    document.getElementById("checkAnswer").innerHTML = studentAnswers;
}

// checks student answer array against question answer array then gives out score.
function submit() {
    studentAnswer = document.getElementById("studentAnswer").value;
    studentAnswers.push(studentAnswer);

    for (s = 0; s < questionCount; s++){
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

function testdisplay(teststring) {
    
    window.alert(teststring);
    return;
}

function exporttext (exported) {
    testText = exported;
        return;
    }