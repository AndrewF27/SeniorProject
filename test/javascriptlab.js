var testArray = [];
var number = 0;

for (i = 0; i < 3; i++) {
    testArray.push(number);
    number ++;
}

document.getElementById("first").innerHTML = (testArray);
document.getElementById("second").innerHTML = (number);
document.getElementById("third").innerHTML = (testArray);

function previous() {
    number--;
    var workingNumber = number - 1;
    document.getElementById("second").innerHTML = (testArray[workingNumber]);
}

function next() {
    document.getElementById("second").innerHTML = ("9");
}