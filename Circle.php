<?php
class Circle
{
    // private int $radius;

    public function __construct(private int $radius)
    {
    }

    public function getRadius(): int
    {
        return $this->radius;
    }
}
