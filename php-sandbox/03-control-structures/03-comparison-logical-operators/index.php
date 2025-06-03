<?php

/*
| Comparison Operators
| Operator | Description              |
| -------- | ------------------------ |
| ==       | Equal to                 |
| ===      | Identical to             |
| !=       | Not equal to             |
| <>       | Not equal to             |
| !==      | Not identical to         |
| <        | Less than                |
| >        | Greater than             |
| <=       | Less than or equal to    |
| >=       | Greater than or equal to |
*/

$x = 10;
$y = '10';

var_dump($x == $y);     // True, since it just tests the value not the type
var_dump($x === $y);    // False, types are different
var_dump($x != $y);    // False, they are equal
var_dump($x <> $y);    // Same as !=
var_dump($x !== $y);    // True, they are not identical
var_dump($x > $y);    // False, same values
var_dump($x < $y);    // False
var_dump($x <= $y);    // True, it's not less but its equal
var_dump($x <= $y);    // True
echo '<hr>';

/*
| Logical Operators
| Operator | Description            |
| -------- | ---------------------- |
| and      | True if both are true  |
| &&       | True if both are true  |
| or       | True if either is true |
| ||       | True if either is true |
| xor      | True if one is true    |
| !        | True if it is not true |
*/

$a = 10;
$b = 20;

var_dump($a == 10 and $b == 20);     // True, both are true
var_dump($a == 10 && $b == 20);     // Same as 'and'
var_dump($a == 10 && $b == 45);     // False, one is not true

var_dump($a == 10 or $b == 45);     // True, only one needs to be true
var_dump($a == 10 || $b == 45);     // Same as 'or'
var_dump($a == 10 xor $b == 20);     // False, this is an xclusive 'or', only true if a single condition is true
var_dump($a == 10 xor $b == 45);     // True
var_dump(!$a == 5);     // True, because it is not true