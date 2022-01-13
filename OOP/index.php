<?php
include_once ("Circle.php");
include_once ("Cylinder.php");
include_once ("Rectangle.php");
include_once ("Shape.php");
include_once ("Square.php");


$rectangle = new Rectangle("Hinh chu nhat ",10,20);
echo " Dien tich hinh chu nhat la : " . $rectangle->calculateArea() . "<br>";
echo " Chu vi hinh chu nhat la : " . $rectangle->calculatePerimeter() . " <br>";
$circle = new Circle("Hinh tron",5);
echo " Dien tich hinh tron la : " . $circle->calculateArea() . "<br>";
echo " Chu vi hinh tron la : " . $circle->calculatePerimeter() . "<br>";
$square = new Square("Hinh vuong",10,10);
echo " Dien tich hinh vuong la : " . $square->calculateArea() . "<br>";
echo " Chu vi hinh vuong la : " . $square->calculatePerimeter() . "<br>";
$Cylinder = new Cylinder("Hinh tru",5,10);
echo " Dien tich hinh tru la : " . $Cylinder->calculateArea() . "<br>";
echo " Chu vi hinh tru la : " . $Cylinder->calculatePerimeter() . "<br>";