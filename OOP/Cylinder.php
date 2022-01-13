<?php
include_once "Shape.php";
class Cylinder extends Circle
{
public $height;

    public function __construct($name,$radius,$height)
    {
        parent::__construct($name,$radius);
        $this->height = $height;
    }
    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }
    public function calculatePerimeter()
    {
        return parent::calculateArea() * $this->height;
    }
}