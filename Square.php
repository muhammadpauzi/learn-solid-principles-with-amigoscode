<?php
require_once('./IShape.php');

class Square
{
    // private int $length;

    public function __construct(private int $length)
    {
    }

    public function getLength(): float
    {
        return $this->length;
    }

    // Override
    public function area(): int
    {
        return pow($this->getLength(), 2);
    }
}
