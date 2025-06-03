<?php

// Function to print values as they are written with <pre>
function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

// Creating an array, both methods accomplish the same
$names = array('John', 'Jack', 'Jill');
$numbers = [1, 2, 3, 4, 5, 6];

// Just printing our arrays
inspect($names);
inspect($numbers);

// Accessing value in array by index
echo $names[2];

// Add element to array to specific index
$numbers[6] = 144;
$numbers[3] = 300;

// Add element to the end of array
$numbers[] = 155;
inspect($numbers);

// Add element to the start of array with this function
array_unshift($numbers, 188);
inspect($numbers);

// Remove element from array using index
unset($numbers[3]);

// Reindex array since the index will be empty otherwise, array_values returns the array and is not in place
$numbers = array_values($numbers);
