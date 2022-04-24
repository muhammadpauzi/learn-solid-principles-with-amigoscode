<?php
require_once('./IShape.php');

class Cube implements IShape
{
    // Override
    public function area(): float
    {
        return 100;
    }
}
