<?php

$number = 1;

// While Loop with If + Else conditionals
while ($number <= 10) {
    if ($number % 2 == 0) {
        echo $number . ' is even <br>';
    } else {
        echo $number . ' is odd <br>';
    }

    $number++;
}

echo '<hr>';

// Break out of a loop

for ($i = 0; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }

    echo $i . '<br>';
}

echo '<hr>';

// Skip and continue

for ($i = 0; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }

    echo $i . '<br>';
}

echo '<hr>';

// Foreach loop

$studentGrades = array(
    'John' => 75,
    'Jack' => 98,
    'Jill' => 55,
    'Joan' => 34,
);

foreach ($studentGrades as $name => $grade) {
    if ($grade >= 90) {
        echo $name . ' has an excellent grade <br>';
    }
}
