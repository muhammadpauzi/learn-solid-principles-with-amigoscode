<?php
require_once('./Circle.php');
require_once('./Square.php');
require_once('./AreaCalculator.php');

$areaCalculator = new AreaCalculator();
$circle = new Circle(10);
$square = new Square(10);

$sum = $areaCalculator->sum([$circle, $square]);
echo "SUM : $sum" . PHP_EOL;
