<?php
// Single responsibility
class ShapeOutputter
{
    public function JSON(int $sum): string
    {
        $data = [
            "shapesSum" => $sum
        ];
        return json_encode($data);
    }

    public function CSV(int $sum): string
    {
        return "shapes_sum,$sum";
    }
}
