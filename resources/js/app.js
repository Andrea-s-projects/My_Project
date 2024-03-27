import './bootstrap';
import 'bootstrap';

// countdown
var deadline = new Date("March 27, 2024 23:59:59 GMT+0200").getTime();

var x = setInterval(function() {
    var now = new Date().getTime();
    var timeLeft = deadline - now;

    var days = Math.floor(timeLeft / (1000 * 60 * 4 * 24));
    var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 24));
    var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

    if (timeLeft < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "EXPIRED";
    }
}, 1000);
// countdown

