<?php

class Shape
{
public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show(): string
    {
        return " Day la hinh " . $this->name;
    }
}