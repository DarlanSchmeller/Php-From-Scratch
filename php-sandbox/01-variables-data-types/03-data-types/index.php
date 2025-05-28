<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/


// ----------
// String

$name = 'Brad Traversy';
$name2 = "John Doe";

var_dump($name);
echo '<br />';
echo($name);
echo '<br>';
echo getType($name2);
echo '<br> ---------- <br> ';



// ----------
// Integer

$age = 35;
$age = -35;
echo($age);
echo '<br>';
var_dump($age);
echo '<br> ---------- <br> ';



// ----------
// Float

$rating = 4.5;
echo($rating);
echo '<br>';
var_dump($rating);
echo '<br> ---------- <br> ';



// ----------
// Boolean

$boolean = true;
echo($boolean);
echo '<br>';
var_dump($boolean);
echo '<br> ---------- <br> ';



// ----------
// Array

$array = [1,2,3,4];
echo($array);
echo '<br>';
var_dump($array);
echo '<br> ---------- <br> ';



// ----------
// Object

$object = new stdClass();
var_dump($object);
echo '<br> ---------- <br> ';



// ----------
// Null

$null = null;
echo($null);
var_dump($null);
echo '<br> ---------- <br> ';



// ----------
// Resource

// $file = fopen('sample.txt','r');
// var_dump($file);
// echo '<br> ---------- <br> ';