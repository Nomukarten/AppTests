<?php

namespace src;

class Task7
{
    public function main(array $arr, int $position): array
    {
        if (!key_exists($position, $arr)) {
            throw new \InvalidArgumentException();
        }

        unset($arr[$position]);
        $i = 0;

        foreach ($arr as $key => $value) {
            if ($key !== $i and is_numeric($key)) {
                $arr[$i] = $arr[$key];
                unset($arr[$key]);
            }
            if (is_numeric($key)) {
                $i++;
            }
        }

        return $arr;
    }
}
