<?php
require_once('./IShape.php');
require_once('./IThreeDimentionalShape.php');

class Cube implements IShape, ThreeDimentionalShape
{
    // Override
    public function area(): float
    {
        return 100;
    }

    // Override
    public function volume(): float
    {
        return 0;
    }
}
