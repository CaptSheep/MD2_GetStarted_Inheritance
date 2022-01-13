<?php
include_once "Shape.php";
class Square extends Rectangle
{
public function __construct($name, $width, $height)
{
    parent::__construct($name, $width, $height);
}
}