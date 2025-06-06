<?php

abstract class Shape
{
    protected $name;

    // Abstract Method
    abstract public function calculateArea();

    public function __construct($name)
    {
        $this->name = $name;
    }

    // Concrete Method
    public function getName()
    {
        return $this->name;
    }
}

class Circle extends Shape
{
    private $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea() 
    {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() 
    {
        return $this->width * $this->height;
    }
}

$myCircle = new Circle('Cool Circle', 15);
echo $myCircle->getName() . '<br> Area: ';
echo $myCircle->calculateArea();

echo '<hr>';

$myRectangle = new Rectangle('Big Rectangle', 7, 10);
echo $myRectangle->getName() . '<br> Area: ';
echo $myRectangle->calculateArea();