<?php

// Parameters are the variables in a function definition, 
function sumValues($a = 1, $b = 1) {
    return $a + $b;
}

// Arguments are the actual values passed in a function call.
$result = sumValues(55,44);
echo $result;

echo '<br>';

function sayHello($name) {
    return 'Hello ' . $name;
}

$phrase = sayHello('John');
echo $phrase;

// Splat operator (...)
function addAll(...$numbers) {  // Allows the function to accept a variable number of arguments.
    $total = 0;

    foreach($numbers as $number) {
        $total += $number;
    }

    return $total;
}

echo '<br>';

$sum = addAll(1,2,3,4,5,6,7,8,9,10);
echo $sum;