<?php
$output = null;
$string = 'Hello World';

// strlen()
$output = strlen($string); // Get string length

// str_word_count()
$output = str_word_count($string); // Return information about words used in a string

// strpos()
$output = strpos($string, 'World'); // Find the position of the first occurrence of a substring in a string

// Get specific char by index
$output = str_word_count($string); // Return information about words used in a string

// str_word_count()
$output = $string[4];

// substr()
$output = substr($string, 6, 5); // Return part of a string or false on failure. For PHP8.0+ only string is returned

// str_replace()
$output = str_replace('World', 'Universe', $string); // Replace all occurrences of the search string with the replacement string

// strtolower()
$output = strtolower($string); // Make a string lowercase

// strtoupper()
$output = strtoupper($string); // Make a string uppercase

// ucwords()
$output = ucwords($string); // Uppercase the first character of each word in a string

// trim()
$output = trim('   Hello World     ') // Strip whitespace (or other characters) from the beginning and end of a string
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>