<?php
include_once "Circle.php";
class Cylinder extends Circle
{
public $height;
public function __construct($radius, $color,$height)
{
    parent::__construct($radius, $color);
    $this->height = $height;
}
public function toString()
{
    return " Ban kinh la : " . $this->radius . " , " . " co mau la : " . $this->color  . " va chieu cao la : " . $this->height;
}

}