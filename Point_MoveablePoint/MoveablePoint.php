<?php

class  MoveablePoint extends Point
{
public $xSpeed;
public $ySpeed;

public function __construct($x, $y,$xSpeed,$ySpeed)
{
    parent::__construct($x, $y);
    $this->xSpeed = $xSpeed;
    $this->ySpeed = $ySpeed;
}

    /**
     * @return mixed
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @param mixed $xSpeed
     */
    public function setXSpeed($xSpeed): void
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @return mixed
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    /**
     * @param mixed $ySpeed
     */
    public function setYSpeed($ySpeed): void
    {
        $this->ySpeed = $ySpeed;
    }
    public function getSpeed(): array
    {
        $arr = [];
        $arr[] = $this->xSpeed;
        $arr[] = $this->ySpeed;
        return $arr;
    }
    public function move(){

    }

}