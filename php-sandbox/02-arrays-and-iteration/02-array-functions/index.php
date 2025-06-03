<?php

$ids = [10, 22, 15, 45, 67, 33];
$users = ['user1', 'user2', 'user3'];


// count()
$output = count($ids);    // Counts all elements in an array, or something in an object.

// Following batch of array functions don't return anything, they're in place

// sort()
sort($ids);        // Sort an array
sort($users);

// rsort()
rsort($ids);    // Sort an array in reverse order
rsort($users);

// array_push()
array_push($ids, '1000');    // Push elements onto the end of array 
array_push($users, '1000');

// array_pop()
array_pop($ids);    // Pop the element off the end of array
array_pop($users);

// array_shift()
array_shift($ids);    // Shift an element off the beginning of array
array_shift($users);

// array_unshift()
array_unshift($ids);    // Prepend elements to the beginning of an array
array_unshift($users);

// array_splice()
array_splice($ids, 1, 1, 'NEW ID');        // Remove a portion of the array and replace it with something else
array_splice($users, 0, 1, 'NEW USER');

// Following batch of array functions return something, they're NOT in place

// array_slice()
$ids2 = array_slice($ids, 2, 3);    // Extract a slice of the array
var_dump($ids2);

// array_sum()
$output = 'Sum of IDs: ' . array_sum($ids);        // Calculate the sum of values in an array

// array_search()
$output = 'User 2 is at index: ' . array_search('user2', $users);     // Searches the array for a given value and returns the first corresponding key if successful

// in_array()
$output = 'User 2 exists in: ' . in_array('user2', $users);     // Checks if a value exists in an array

// explode()
$tags = 'tech,code,programming';
$tagsArr = explode(',', $tags);        // Split a string by a string
var_dump($tagsArr);

// implode()
$implodeArr = implode(',', $users);        // Join array elements with a string
var_dump($implodeArr);

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
            <p class="text-xl"><?= $output ?></p>
            <h2 class="text x1 font-semibold my-4">IDs Array:</h2>
            <p>
            <pre>
                    <?php print_r($ids); ?>
                    <?php print_r($users); ?>
                </pre>
            </p>
            </p>
        </div>
    </div>
</body>

</html>