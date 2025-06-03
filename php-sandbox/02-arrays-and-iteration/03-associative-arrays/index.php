<?php
$output = null;

// Associative arrays are Php's version of dictionaries
$user = [
    'name' => 'John',
    'email' => 'john@email.com',
    'password' => '1234',
    'hobbies' => ['tennis', 'video-games']
];

// Accessing an associative array value through a key
$output1 = $user['name'];
$output2 = $user['email'];
$output3 = $user['hobbies'][0];

// Adding elements to an associative array
$user['address'] = '123 Main Str';
$user['Dog\'s name'] = 'Bubble';

// Removing an element from an associative array using unset()
unset($user['Dog\'s name']);
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
            <p class="text-xl"><?= $output1 . '<br>' . $output2 . '<br>' . $output3 ?></p>
            <h2 class="text-xl font-semibold my-4">User Array: </h2>
            <pre>
                <?php print_r($user) ?>
            </pre>
        </div>
    </div>
</body>

</html>