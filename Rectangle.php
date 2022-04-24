<?php
require_once('./IShape.php');

class Rectangle implements IShape
{
    // Override
    public function area(): float
    {
        return 20;
    }
}
