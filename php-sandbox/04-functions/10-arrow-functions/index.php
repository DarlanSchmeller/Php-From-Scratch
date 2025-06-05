<?php

$numbers = [1,2,3,4,5];

// Arrow function, shorter syntax for simple, single-expression functions
$addValues = fn ($a, $b) => $a + $b;

// Using Arrow Function inside an array_map
$squaredNumbers = array_map(fn ($number) => $number * $number,
$numbers);

echo $addValues(1,3) . '<hr>';
print_r($squaredNumbers);