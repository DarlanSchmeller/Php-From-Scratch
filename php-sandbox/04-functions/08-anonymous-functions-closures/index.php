<?php
// This is an Anonymous Function, also called a Lambda Function
$square = function ($number) {
    return $number * $number;
};

$result = $square(5);
echo 'The square of 5 is ' . $result . '<br>';

// Closures
function createCounter() {
    $count = 0;

    // Define a closure that captures $count by reference using the '&' symbol
    $counter = function() use (&$count) {
        return ++$count;
    };

    return $counter;
}

$result = createCounter();
echo $result() . '<br>';
echo $result() . '<br>';
echo $result() . '<br>';
echo $result() . '<br>';