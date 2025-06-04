<?php

$score = 50;

if ($score > 40) {
    echo 'High score';
} else {
    echo 'Low score';
}

echo '<br>';

echo $score > 40 ? 'High score' : 'Low score';