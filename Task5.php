<?php

namespace src;

class Task5
{
    public const pheta = 1.6180339887499;

    public function main(int $n): int
    {
        if ($n == 1) {
            return $n;
        }

        $v = Task5::boundary($n);

        return Task5::fib($v + 1);
    }

    public function root(float $number, float $root = 2): float
    {
        return $number ** (1 / $root);
    }
    public function power(float $number, float $val = 2): float
    {
        return $number ** $val;
    }
    public function fib(int $n): float
    {
        return (Task5::power(Task5::pheta, $n) - Task5::power(1 - Task5::pheta, $n)) / Task5::root(5);
    }

    public function boundary(float $n, int $min = 0, int $max = 1000): int
    {
        $newpivot = ($min + $max) / 2;
        if ($min == $newpivot - 0.5) {
            return $newpivot;
        }

        if (Task5::fib($newpivot) > $n) {
            return Task5::boundary($n, $min, $newpivot);
        } else {
            return Task5::boundary($n, $newpivot, $max);
        }
    }
}
