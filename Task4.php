<?php

namespace src;

class Task4
{
    public function main(string $inputString): string
    {
        $words = preg_split('/[-_]/', $inputString);
        foreach ($words as &$value) {
            $value[0] = strtoupper($value[0]);
        }
        $inputString = implode('', $words);

        return $inputString;
    }
}
