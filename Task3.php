<?php

namespace src;

class Task3
{
    public function main(int $inputNumber): int
    {
        while (abs($inputNumber) >= 9) {
            $temp = 0;
            while (abs($inputNumber % 10) >= 1) {
                $temp += $inputNumber % 10;
                $inputNumber /= 10;
            }
            $inputNumber = $temp;
        }

        return $inputNumber;
    }
}
