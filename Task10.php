<?php

namespace src;

class Task10
{
    public function main(int $input): array
    {
        $answ = [];
        array_push($answ, $input);
        while ($input != 1) {
            if ($input % 2 == 0) {
                $input /= 2;
            } else {
                $input = 3 * $input + 1;
            }
            array_push($answ, $input);
        }

        return $answ;
    }
}
