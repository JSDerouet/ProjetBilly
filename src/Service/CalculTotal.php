<?php

namespace App\Service;

class CalculTotal
{
    public function total(int $base, int $carac, int $item, int $gain): int
    {
        return $base + $carac + $item + $gain;
    }
}