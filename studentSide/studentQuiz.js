//Input
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