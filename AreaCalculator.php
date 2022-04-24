<?php
require_once('./Square.php');
require_once('./Circle.php');
require_once('./Cube.php');

class AreaCalculator
{
    public function sum(array $shapes): int
    {
        $sum = 0;
        foreach ($shapes as $shape) {
            $sum += $shape->area();

            // if ($shape instanceof Square)
            //     $sum += pow($shape->getLength(), 2); // length^2

            // if ($shape instanceof Circle)
            //     $sum = pi() * pow($shape->getRadius(), 2); // radius^2

            // ini tidak termasuk O: Open Closed (karena mengubah kode dari sebuah class utama)
            // if ($shape instanceof Cube) {
            // }
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
