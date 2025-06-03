<!-- Typecasting is the process of changing a value from one data type to another -->

<?php

$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = "apple";
$bool1 = true;
$bool2 = false;
$null = null;

// Implicit Conversion / Type Juggling -- In this case PHP automatically converts the string to a number
$result = $number1 + $number2;  // int
$result2 = $number1 + $number3; // int (string to int)
$result3 = $number3 + $number3; // int (string to int)
$result4 = $number1 . $number2; // string
// $result5 = $fruit + $number2; // error thrown since php can't convert to a number
$result6 = $number1 + $bool1;   // int (true to  int 1) - Php converts true and false to 1 and 0 respectively.
$result7 = $number1 + $bool2;   // int (false to int 0)
$result8 = $number1 + $null;   // int (null to int 0) - Php converts null to int 0

var_dump($result);
var_dump($result2);
var_dump($result3);
var_dump($result4);
// var_dump($result5);
var_dump($result6);
var_dump($result7);
var_dump($result8);
echo ("<br><br>");

// Explicit Conversion / Type Casting -- In this case PHP automatically converts the string to a number
$result1 = (string) +$number1;
$result2 = (int) +$number3;
$result3 = (bool) +$number1; // Any number above 0 gets converted to true in php

var_dump($result);
var_dump($result2);
var_dump($result3);
