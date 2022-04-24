<?php
class Square
{
    // private int $length;

    public function __construct(private int $length)
    {
    }

    public function getLength(): int
    {
        return $this->length;
    }
}
