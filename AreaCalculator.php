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

    // ini tidak termasuk ke SOLID PRINCIPLES (seharusnya ditulis di class lain)
    // public function JSON(array $shapes): string
    // {
    //     $data = [
    //         "sum" => $this->sum($shapes)
    //     ];
    //     return json_encode($data);
    // }

    // ini juga
    // public function CSV(array $shapes): string
    // {
    //     $sum = $this->sum($shapes);
    //     return "sum,$sum";
    // }
}
