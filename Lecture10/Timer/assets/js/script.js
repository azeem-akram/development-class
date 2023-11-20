

var hours = 0;
var minutes = 0;
var seconds = 0;

var timer;


function startTimer() {
    //Javascript builtin function setInterval()
    timer = setInterval(updateTimer, 1000); // 1000 miliseconds = 1 seconds

}


function updateTimer() {
    seconds++;
    if (seconds == 60) {
        seconds = 0;
        minutes++;

        //60 minutes are passed
        if(minutes == 60){
            minutes = 0;
            hours++;
        }
    }

    document.getElementById("myTimer").innerText = makeTwoDigits(hours) + ":" + makeTwoDigits(minutes) + ":" + makeTwoDigits(seconds);



}


function makeTwoDigits(number) {
    if(number < 10){
        return "0" + number;
    }
    return number;
}



function stopTimer() {
    //Built in funciton from javascript
    clearInterval(timer);
}


function resetTimer() {
    clearInterval(timer);
    hours = 0;
    seconds = 0
    minutes = 0;
    document.getElementById("myTimer").innerText = "00:00:00";
}