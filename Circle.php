<?php
require_once('./IShape.php');

class Circle implements IShape
{
    // private int $radius;

    public function __construct(private int $radius)
    {
    }

    public function getRadius(): int
    {
        return $this->radius;
    }

    // Override
    public function area(): float
    {
        return pi() * pow($this->getRadius(), 2);
    }
}
