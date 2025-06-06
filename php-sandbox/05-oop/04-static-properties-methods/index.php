<?php

class MathUtility
{
    // Being static means it's shared by all instances of the class,
    // and can be accessed without creating an object, like ClassName::$pi.
    public static $pi = 3.14;

    public static function add(...$nums) {
        return array_sum($nums);
    }
}

$mathUtil1 = new MathUtility();

echo MathUtility::$pi . '<br>';  // We can access static methods without instancing the class
echo MathUtility::add(1,2,3,4,5);