<?php

namespace App\Domain\Model;

interface Calculator
{
    public function calculator(int $x, int $y): int;
}
