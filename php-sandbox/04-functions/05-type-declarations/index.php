<?php

// Enforces strict type checking — values must match the declared types exactly 
declare(strict_types = 1);

// Now if the function's arguments aren't an int, an error will occur
function getSum(int $a, int $b) {
    return $a + $b;
}

// In this example an error will be thrown if the return value is not a string
function greeting(string $name): string
{
    return 'Hello ' . $name;
}

$result = getSum(1,1);
$greeting = greeting('John');
echo $result . '<br>' . $greeting;