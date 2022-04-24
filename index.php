<?php
require_once('./Circle.php');
require_once('./Square.php');
require_once('./Cube.php');
require_once('./Rectangle.php');
require_once('./NoShape.php');
require_once('./AreaCalculator.php');
require_once('./AreaCalculatorV2.php');
require_once('./ShapeOutputter.php');

$areaCalculator = new AreaCalculator();
$areaCalculatorV2 = new AreaCalculatorV2();
$circle = new Circle(10);
$square = new Square(10);
$cube = new Cube();
$rectancle = new Rectangle();
$noShape = new NoShape();

// $sum = $areaCalculator->sum([$circle, $square, $cube, $rectancle]);
// bisa menggunakan lebih dari satu class/object
// $shapeOutputter = new ShapeOutputter($areaCalculator);
$shapeOutputter = new ShapeOutputter($areaCalculatorV2);

$shapes = [$circle, $square, $cube, $rectancle];

echo "SUM : {$shapeOutputter->JSON($shapes)}" . PHP_EOL;
echo "CSV : {$shapeOutputter->CSV($shapes)}" . PHP_EOL;
