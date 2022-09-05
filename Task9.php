<?php

namespace src;

class Task9
{
    public function main(array $arr, int $number): array
    {
        $count = count($arr);
        if ($count < 3) {
            throw new \InvalidArgumentException();
        }
        foreach ($arr as $value) {
            if (!is_numeric($value)) {
                throw new \InvalidArgumentException();
            }
        }

        $answ = [];
        $arr = array_values($arr);

        for ($i = 0; $i < $count - 2; $i++) {
            if (($arr[$i] + $arr[$i + 1] + $arr[$i + 2]) == $number) {
                array_push($answ, $arr[$i] . '+' . $arr[$i + 1] . '+' . $arr[$i + 2]);
            }
        }

        return $answ;
    }
}
