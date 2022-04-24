<?php
require_once('./IShape.php');

class NoShape implements IShape
{
    public function area(): float
    {
        throw new Exception("Cannot calculate area");
    }
}
