<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/

$output = [];

$num1 = 20;
$num2 = 10;

// Basic Math
$output[] = "$num1 + $num2 = " . $num1 + $num2;
$output[] = "$num1 - $num2 = " . $num1 - $num2;
$output[] = "$num1 * $num2 = " . $num1 * $num2;
$output[] = "$num1 / $num2 = " . $num1 / $num2;
$output[] = "$num1 % $num2 = " . $num1 % $num2;

// Assignment Operator
$num3 = $num3 + 20;
$num3 += 10;
$num3 -= 10;
$num3 /= 2;

// Built-in PHP Functions

// rand()
$output[] = rand(1,10); // Generate a random integer
$output[] = getrandmax(); // Show largest possible random value

// round()
$output[] = round(4.7); // Returns the rounded value of val to specified precision (number of digits after the decimal point)
$output[] = round(4.2);

// ceil()
$output[] = ceil(4.7); // Round fractions up

// floor()
$output[] = floor(4.7); // Round fractions down

// sqrt()
$output[] = sqrt(64); // Square root

// pi()
$output[] = pi(); // Get value of pi

// abs()
$output[] = abs(-4.7); // Absolute value

// max()
$output[] = max([1,3,4,70,25]); // Find highest value
$output[] = max(2,3,4,70,80);

// min()
$output[] = min(1,3,4,70,80); // Find lowest value
$output[] = min(133,494,10,4);

// number_format()
$output[] = number_format(1234567.191234, 2, '.', ','); // Format a number with grouped thousands

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
      <!-- Output -->
       <?php
          foreach($output as $output_item) {
            echo($output_item . '<br>'); 
          }
       ?>
    </div>
  </div>
</body>

</html>