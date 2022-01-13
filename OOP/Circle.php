<?php
include_once "Shape.php";
class Circle extends Shape
{
public $radius;
const PI = 3.14;

    public function __construct($name,$radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    public  function  calculateArea (){
        return pow($this->radius,2) * self::PI;
    }
    public function calculatePerimeter(){
        return 2 * $this->radius * self::PI;
    }
}