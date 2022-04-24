<?php
require_once('./Circle.php');
require_once('./Square.php');
require_once('./AreaCalculator.php');
require_once('./ShapeOutputter.php');

$areaCalculator = new AreaCalculator();
$circle = new Circle(10);
$square = new Square(10);

$sum = $areaCalculator->sum([$circle, $square]);
// $csv = $areaCalculator->CSV([$circle, $square]);
$shapeOutputter = new ShapeOutputter();

echo "SUM : {$shapeOutputter->JSON($sum)}" . PHP_EOL;
echo "CSV : {$shapeOutputter->CSV($sum)}" . PHP_EOL;
