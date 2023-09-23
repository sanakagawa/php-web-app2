<?php

namespace App\Domain\Model;

class Add implements Calculator
{

    public function calculator(int $x, int $y): int
    {
        return $x + $y;
    }
}
