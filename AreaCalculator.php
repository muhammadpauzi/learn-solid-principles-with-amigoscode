<?php
require_once('./Square.php');
require_once('./Circle.php');

class AreaCalculator
{
    public function sum(array $shapes): int
    {
        $sum = 0;
        foreach ($shapes as $shape) {
            if ($shape instanceof Square)
                $sum += pow($shape->getLength(), 2); // length^2

            if ($shape instanceof Circle)
                $sum = pi() * pow($shape->getRadius(), 2); // radius^2
        }
        return $sum;
    }
}
