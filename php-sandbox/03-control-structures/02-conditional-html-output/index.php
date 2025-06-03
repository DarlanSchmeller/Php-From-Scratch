<?php
$isLoggedIn = true;
$name = null;
$name = 'Darlan';
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
            <h1 class="text-3xl">
                <?php if ($isLoggedIn == True): ?>
                    <?php if (isset($name)): // Determine if a variable is declared and is different than NULL 
                    ?>
                        Hello <?= $name ?>,
                    <?php else : ?>
                        Hello User,
                    <?php endif; ?>
                    Welcome to the App!
                <?php else : ?>
                    Please log in.
                <?php endif; ?>

                <br>
                <br>

                <?php if ($isLoggedIn && $name) : ?>
                    welcome <?= $name ?>
                <?php elseif ($isLoggedIn): ?>
                    Welcome User
                <?php endif; ?>
            </h1>
        </div>
    </div>
</body>

</html>