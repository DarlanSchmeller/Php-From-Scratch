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
$output[] = rand(1,10);
$output[] = getrandmax();

// round()
$output[] = round(4.7);
$output[] = round(4.2);

// ceil()
$output[] = ceil(4.7);

// floor()
$output[] = floor(4.7);

// sqrt()
$output[] = sqrt(64);

// pi()
$output[] = pi();

// abs()
$output[] = abs(-4.7);

// max()
$output[] = max([1,3,4,70,25]);
$output[] = max(2,3,4,70,80);

// min()
$output[] = min(1,3,4,70,80);
$output[] = min(133,494,10,4);

// number_format()
$output[] = number_format(1234567.191234, 2, '.', ',');

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