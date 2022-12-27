<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!". "<br><br><br>";

ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br><br><br>";

$color = "red";
echo "My car is " . $color . "<br><br><br>";
// echo "My house is " . $COLOR . "<br>";            Variable names ARE case-sensitive
// echo "My boat is " . $coLOR . "<br><br>";         Variable names ARE case-sensitive


function WRITEMsg() {
    echo "I AM WRITING MESSAGE!". "<br><br><br>";   // Keywords, classes, functions, and user-defined functions ARE NOT case-sensitive
}

writemsg();


$x = 5 /* + 15 */ + 5;                              // comment single using //, mutiline comment using /*   */
echo $x."<br><br><br>";

$txt = "Hello world!";                              // different variable assign
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br><br><br>";

echo "This ", "string ", "was ", "made ", "with multiple parameters.";
// print "This ", "string ", "was ", "made ", "with multiple parameters.";  // syntax error
print "<h2>" . $x . "</h2>";
echo "<br><br><br>";

$x = 10.365;
echo "var_dump function data type and value return:" . var_dump($x)."<br>";      // var_dump function declare data type and value
echo "String Length: " . strlen("Hello world!")."<br>";   // return size of string
echo "Word count in string:" . str_word_count("Hello world program in php")."<br>";   // count word in string
echo "reverse string:" . strrev("Hello world program in php")."<br>";   // reverse string
echo "find string position:" . strpos("Hello world program in php", "program")."<br>";   // string position find
echo "replace string:" .  str_replace("program", "coding", "Hello world program in php!"); // string replace
echo "<br><br>";

define("greeting", "Welcome to W3Schools.com!");  // declare constant
echo greeting;

echo "<br><br><br><br><br>";

$d = date("D");   // For printing full day echo date("l") small L
echo "<p>The day is " . $d . " and will give the following message:</p>";

if ($d == "Fri") {
    echo "Have a nice week!";
} elseif ($d == "Sun") {
    echo "Have a good day!";
} else {
    echo "Nice Day!";
}

?> 



</body>
</html>