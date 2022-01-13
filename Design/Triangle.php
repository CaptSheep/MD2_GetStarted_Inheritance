<?php

class Triangle
{
    public $side1 ;
    public $side2;
    public $side3;

    /**
     * @param $side1
     * @param $side2
     * @param $side3
     */
    public function __construct($side1, $side2, $side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    /**
     * @return mixed
     */
    public function getSide1()
    {
        return $this->side1;
    }

    /**
     * @param mixed $side1
     */
    public function setSide1($side1): void
    {
        $this->side1 = $side1;
    }

    /**
     * @return mixed
     */
    public function getSide2()
    {
        return $this->side2;
    }

    /**
     * @param mixed $side2
     */
    public function setSide2($side2): void
    {
        $this->side2 = $side2;
    }

    /**
     * @return mixed
     */
    public function getSide3()
    {
        return $this->side3;
    }

    /**
     * @param mixed $side3
     */
    public function setSide3($side3): void
    {
        $this->side3 = $side3;
    }

    public function calculateHeight()
    {
        return ($this->side1 * sqrt(3)) / 2;
    }

    public function calculateArea()
    {
        return (pow($this->side1, 2) * sqrt(3)) / 4;

    }
    public function calculatePerimeter(){
        return ($this->side1 / 2) * $this->calculateHeight();
    }
    public function toString(): string{
        return " Chieu dai canh a la : " . $this->side1 . " <br>" . " Chieu dai canh b la :" . $this->side2 . "<br>" . " Chieu dai canh c la : " . $this->side3 . "<br>" . " Co chu vi la :" . $this->calculatePerimeter() . "<br>" . " Co dien tich la : " . $this->calculateArea();
    }
}