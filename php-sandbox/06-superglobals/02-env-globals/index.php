<?php
// Save values in Environment (env)
putenv('DB_HOST=localhost');
putenv('DB_USER=root');

// Get values from env
$host = getenv('DB_HOST');
$user = getenv('DB_USER');

// Get all environment variables
// var_dump(getenv());

echo getenv('HOME') . '<br>';

// GLOBALS: An associative array containing references to all 
// variables which are currently defined in the global scope of the script.
// The variable names are the keys of the array.
$foo = 'Hi I\'m a Global variable';

function test()
{
  $foo = 'Hi I\'m a Local variable';
  echo 'Global variable: ' . $GLOBALS['foo'];
  echo '<br> Local variable: ' . $foo;
}
$foo = 'hello';

test();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>System Information</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <div class="container mx-auto p-8 bg-white shadow-md mt-10 rounded-lg">
    <h1 class="text-3xl font-semibold mb-4 text-center">System Information</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">DB Host: <?= $host ?></strong>

      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">DB User: <?= $user ?></strong>

      </div>

    </div>
</body>

</html>