//Input
var testText = "This is a test test test sentence sentence to test the text text sifting and quiz quiz algorithm creation algorithm";

document.getElementById("question").innerHTML = testText;

var testTextSplit = testText.split(" ");

//String Sifter
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

//document.write(randomWordCount);
//document.getElementById("question").innerHTML = randomWord;
//Question & Answer Generation
var question1 = "How many times does the word ";
var question2 = " appear in the test text?";
var questionTotal = question1.concat(randomWord, question2);


var score = 0;

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
    }
    
}

//Writing score to database


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