<?php

$age = 19;

// If statement
if ($age >= 21) {
    echo 'You are old enough to drink in the US';
}
echo '<hr>';

// If-Else
if ($age >= 21) {
    echo 'You are old enough to drink in the US';
} else {
    echo 'You are NOT old enough to drink in the US';
}
echo '<hr>';

// Nested if statement
if ($age >= 21) {
    echo 'You are old enough to vote and drink in the US';
} else {
    if ($age > 18) {
        echo 'You are NOT old enough to vote in the US';
    } else {
        echo 'You are NOT old enough to vote or drink in the US';
    }
}
echo '<hr>';

// If-Else-If
if ($age >= 21) {
    echo 'You are old enough to vote and drink in the US';
} else if ($age >= 18) {
    echo 'You are NOT old enough to vote in the US';
}
