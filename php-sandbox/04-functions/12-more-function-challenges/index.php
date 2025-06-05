<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/

function farenheitToCelsius($temperature) {
    $converted = ($temperature - 32) * 5/9;

    return $converted;
}

$convertedTemp = farenheitToCelsius(100);
$convertedTempArrow = fn ($temperature) => ($temperature - 32) * 5/9;

echo $convertedTemp . '<br>';
echo $convertedTempArrow(100);

echo '<hr>';

/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/

$names = ['john', 'maria', 'claire', 'phil'];

function printNamesToUpperCase($nameArray) {
    foreach($nameArray as $name) {
        echo strtoupper($name) . '<br>';
    }
}

printNamesToUpperCase($names);

echo '<hr>';

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/

$phrase = 'The quick brown fox jumped over the lazy dog';

function findLongestWord($phrase) {
    $phraseArray = explode(' ', $phrase);
    $longestWord = '';

    foreach($phraseArray as $word) {
        if(strlen($word) > strlen($longestWord)) {
            $longestWord = $word;
        }
    }

    return $longestWord;
}
$result = findLongestWord($phrase);
echo $result;
