<?php

// Global Scope
$globalName = 'Alice';

function sayHello() {
    // Import a variable from the global scope into the local scope
    global $globalName;
    $globalName = $globalName . ' Globals';

    // Local Scope
    $localName = 'John';
    return 'Hello Local ' . $localName . ' and Global ' . $globalName;
}

echo $globalName . '<br>';
$welcomeMessage = sayhello();
echo $welcomeMessage;