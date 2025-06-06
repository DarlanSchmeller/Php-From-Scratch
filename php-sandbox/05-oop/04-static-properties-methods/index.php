<?php

class MathUtility
{
    // Being static means it's shared by all instances of the class,
    // and can be accessed without creating an object, like ClassName::$pi.
    public static $pi = 3.14;
}

$mathUtil1 = new MathUtility();

echo MathUtility::$pi;  // We can access static methods without instancing the class