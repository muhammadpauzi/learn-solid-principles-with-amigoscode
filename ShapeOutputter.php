<?php
require_once('./AreaCalculator.php');
require_once('./IAreaCalculator.php');

// Single responsibility
class ShapeOutputter
{
    // ini tidak termasuk ke prinsip terakhir D: Dependency Inversion
    // private AreaCalculator $areaCalculator = new AreaCalculator();

    // private IAreaCalculator $areaCalculator;

    public function __construct(private IAreaCalculator $areaCalculator)
    {
    }

    public function JSON(array $shapes): string
    {
        $data = [
            "shapesSum" => $this->areaCalculator->sum($shapes)
        ];
        return json_encode($data);
    }

    public function CSV(array $shapes): string
    {
        return "shapes_sum,{$this->areaCalculator->sum($shapes)}";
    }
}
