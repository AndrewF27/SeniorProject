//Input
var testText = "This is a test test test sentence sentence to test the text text sifting and quiz quiz algorithm creation algorithm";

document.getElementById("question").innerHTML = testText;
//document.getElementById("question").innerHTML = testTextSplit;

var testTextSplit = testText.split(" ");
//document.getElementById("after").innerHTML = testTextSplit;
//document.write(testTextSplit);

//String Sifter
var randomWord = testTextSplit[Math.floor(Math.random()*testTextSplit.length)];
document.write(randomWord);
/*var randomWordCount = (testText.match(randomWord).length)
document.write(randomWordCount)*/
var randomWordCount = 0;
for (i = 0; i < testTextSplit.length; i++) {
    if (testTextSplit[i] == randomWord) {
        randomWordCount = randomWordCount + 1;
    }
}
//document.write(randomWordCount);
//document.getElementById("question").innerHTML = randomWord;
//Question & Answer Generation
var question1 = "How many times does the word ";
var question2 = " appear in the test text?";
var questionTotal = question1.concat(randomWord, question2);
document.getElementById("after").innerHTML = questionTotal;

var answer1 = "The word "
var answer2 = " appears "
var answer3 = " time(s)!"
var answerTotal = answer1.concat(randomWord, answer2, randomWordCount, answer3);
document.getElementById("test").innerHTML = answerTotal;

//Awarding Points
var studentResponse = 0;
var score = 0;
var questionNumber = 0;
if (studentResponse == randomWordCount) {
    score++;
}
//Page Refreshing
/*
var quizActive = 1;

while (quizActive != 1) {
    location.reload()
}
*/















function changestring(){
    testText = document.getElementById("quiztext").value;
    return;
    }

function testdisplay(teststring) {
    
    window.alert(teststring);
    return;
}