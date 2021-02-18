//Input
var testText = "This is a test test test sentence sentence to test the text text sifting and quiz quiz algorithm creation algorithm";

document.getElementById("question").innerHTML = testText;

var testTextSplit = testText.split(" ");

//String Sifter
function questionGen() {
    var randomWord = testTextSplit[Math.floor(Math.random()*testTextSplit.length)];
//document.write(randomWord);
/*var randomWordCount = (testText.match(randomWord).length)
document.write(randomWordCount)*/
    var randomWordCount = 0;
    for (i = 0; i < testTextSplit.length; i++) {
        if (testTextSplit[i] == randomWord) {
            randomWordCount = randomWordCount + 1;
        }
    }
}

//document.write(randomWordCount);
//document.getElementById("question").innerHTML = randomWord;
//Question & Answer Generation

function button() {
var answer = prompt("");
var answer1 = "Correct! The word "
var answer2 = " appears "
var answer3 = " time(s)!"
var answer4 = "Incorrect! The word "
var answerTotal = answer1.concat(randomWord, answer2, randomWordCount, answer3);
var answerTotal2 = answer4.concat(randomWord, answer2, randomWordCount, answer3);
if (answer == randomWordCount) {
    document.getElementById("test").innerHTML = answerTotal;
} 
else {
    document.getElementById("test").innerHTML = answerTotal2;
}

}


//Awarding Points
var studentResponse = 0;
var score = 0;
var questionNumber = 0;
if (studentResponse == randomWordCount) {
    score++;
}
else {
    document.write("Oops, incorrect!");
}
//Page Refreshing

var quizActive = 1;


function checkQuiz() {
    while (quizActive != 1) {
        location.reload();
    }
}
