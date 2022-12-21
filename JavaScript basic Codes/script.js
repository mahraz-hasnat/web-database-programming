function largest() {
    var res = document.getElementById("result");

    n1 = document.getElementById("n1").value;
    n2 = document.getElementById("n2").value;
    n3 = document.getElementById("n3").value;

    res.innerHTML = "largest Number: " + Math.max(n1, n2, n3);
}

function multiplication() {
    var result = document.getElementById("result");

    n1 = document.getElementById("n1").value;
    n2 = document.getElementById("n2").value;

    var temp = n1 * n2;
    result.innerHTML = "Multiplication: " + temp;
}

function divide() {
    var result = document.getElementById("result");

    n1 = document.getElementById("n1").value;
    n2 = document.getElementById("n2").value;

    var temp = n1 / n2;
    result.innerHTML = "1st Number/ 2nd Number: " + temp;
}

function time() {
    var result = document.getElementById("result");
    t_sec = document.getElementById("n1").value;

    var hour = t_sec / 3600;
    var remain_sec = t_sec - hour * 3600;
    var min = remain_sec / 60;
    remain_sec = remain_sec - min * 60;
    var sec = remain_sec;

    result.innerHTML = hour + " hour " + min + "minute" + sec + "second";
}

function guessTheNum() {
    var res = document.getElementById("result");
    var num = document.getElementById("n1").value;

    var random = Math.floor(Math.random() * 10 + 1);
    if (num == random) {
        res.innerHTML = "Good Work";
    } else {
        res.innerHTML = "Not Matched";
    }
}

function age() {
    var userinput = document.getElementById("DOB").value;
    var dob = new Date(userinput);
    if (userinput == null || userinput == "") {
        document.getElementById("message").innerHTML = "**Choose a date please!";
        return false;
    } else {
        var month_diff = Date.now() - dob.getTime();

        var age_dt = new Date(month_diff);

        var year = age_dt.getUTCFullYear();

        var age = Math.abs(year - 1970);

        return (document.getElementById("result").innerHTML =
            "Age is: " + age + " years. ");
    }
}

function leapyear() {
    var result = document.getElementById("result");
    var year = document.getElementById("year").value;
    if ((0 == year % 4 && 0 != year % 100) || 0 == year % 400) {
        result.innerHTML = year + " is leap year!!!";
    } else {
        result.innerHTML = year + " is not a leap year";
    }
}

function sumofarray() {
    var result = document.getElementById("result");

    var n1 = document.getElementById("n1").value;
    var n2 = document.getElementById("n2").value;
    var n3 = document.getElementById("n3").value;
    var n4 = document.getElementById("n4").value;
    var n5 = document.getElementById("n5").value;
    var n6 = document.getElementById("n6").value;

    var sum = n1 + n2 + n3 + n4 + n5 + n6 ;

    result.innerHTML = "Sum of Array: " + sum;
}
