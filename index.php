<?php
require_once('./Circle.php');
require_once('./Square.php');
require_once('./Cube.php');
require_once('./Rectangle.php');
require_once('./AreaCalculator.php');
require_once('./ShapeOutputter.php');

$areaCalculator = new AreaCalculator();
$circle = new Circle(10);
$square = new Square(10);
$cube = new Cube();
$rectancle = new Rectangle();

$sum = $areaCalculator->sum([$circle, $square, $cube, $rectancle]);
$shapeOutputter = new ShapeOutputter();

echo "SUM : {$shapeOutputter->JSON($sum)}" . PHP_EOL;
echo "CSV : {$shapeOutputter->CSV($sum)}" . PHP_EOL;
