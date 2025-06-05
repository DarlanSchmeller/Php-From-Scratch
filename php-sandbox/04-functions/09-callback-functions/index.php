<?php

$numbers = [1,2,3,4,5];

// A callback function is a function that is passed as an argument to another function
$square = function ($number) {
    return $number * $number;
};

// Apply the $square function to each element in the $numbers array
// array_map returns a new array with the results of the callback
$squaredNumbers = array_map($square, $numbers);

print_r($squaredNumbers);

function applyCallback($callback, $value) {
    return $callback($value);
}

// Create anonymous function
$double = function ($number) {
    return $number * 2;
};

// Passes $double function to applyCallback() function as an argument
$result = applyCallback($double, 5);