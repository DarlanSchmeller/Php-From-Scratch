<?php
/*
Fizzbuzz Challenge:
Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”. Remember, you can use the modulus operator to check if a number is divisible by another number.
*/

for($i = 1; $i <= 100; $i++) {
    $isMultipleOfThree = $i % 3 === 0;
    $isMultipleOfFive = $i % 5 === 0;

    if ($isMultipleOfThree && $isMultipleOfFive) {
        echo 'FizzBuzz' . '<br>';
    } elseif ($isMultipleOfFive) {
        echo 'Buzz' . '<br>';
    } elseif ($isMultipleOfThree) {
        echo 'Fizz' . '<br>';
    } else {
        echo $i . '<br>';
    }
}