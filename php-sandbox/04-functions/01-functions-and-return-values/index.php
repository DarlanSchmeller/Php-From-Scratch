<?php

function sayHello() {
    echo 'Hello World!';
}

function sayGoodbye() {
    return 'Goodbye World!';    // The Standard is for a function to return a string and not echo it
}

sayHello();
echo '<br>';

$goodbye = sayGoodbye();
echo $goodbye;