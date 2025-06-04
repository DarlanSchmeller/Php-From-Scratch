<?php

// Constants are immutable values that don't change and can be accessed globally

// First method for defining a Constant
define('APP_NAME', 'My app');
define('APP_VERSION', '1.0.0');

echo APP_NAME . '<br>' . APP_VERSION;

echo '<hr>';

// Second method for defining a Constant
const DB_NAME = 'mydb';
const DB_HOST = 'localhost';

echo DB_NAME . '<br>' . DB_HOST;