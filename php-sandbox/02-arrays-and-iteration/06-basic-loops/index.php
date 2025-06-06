<?php
// Basic For Loop
for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
}

// Basic While Loop
$x = 0;
while ($x < 10) {
    echo $x . '<br>';
    $x++;
}

// Basic Do While Loop
$x = 0;
do {
    echo $x . '<br>';
    $x++;
} while ($x < 5);
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
            <ul>
                <!-- Template syntax using For Loop -->
                <?php for ($i = 0; $i <= 10; $i++): ?>
                    <li> Number: <?= $i ?></li>
                <?php endfor; ?>

                <hr>

                <!-- Template syntax using While Loop -->
                <?php $i = 0;
                while ($i <= 10): ?>
                    <li> Number: <?= $i ?></li>
                <?php $i++;
                endwhile; ?>

                <hr>

                <?php $i = 0;
                do { ?>
                    <li> Number: <?= $i ?></li>
                <?php $i++;
                } while ($i < 10) ?>
            </ul>
        </div>
    </div>
</body>

</html>