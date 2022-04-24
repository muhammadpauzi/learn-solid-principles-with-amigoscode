<?php
interface IShape
{
    public function area(): float;
    // ini tidak termasuk ke Prinsip I: Interface Segregation (seharusnya membuat interface lain untun shape yang hanya bisa mengembalikan volume sperti 3d shape (cube))
    // public function volume(): float;
}
