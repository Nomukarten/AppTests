<?php

namespace src;

class Task8
{
    public function main(string $json): string
    {
        $decode = json_decode($json);

        if (json_last_error() === JSON_ERROR_NONE) {
            $result = '';
            foreach ($decode as $key => $value) {
                if (is_object($value)) {
                    $result = Task8::get_recursive($value, $result);
                } else {
                    $result = $result . $key . ': ' . $value . "\r\n";
                }
            }
        } else {
            throw new \InvalidArgumentException();
        }

        return $result;
    }

    private function get_recursive(object $arr, string &$result): string
    {
        foreach ($arr as $key => $value) {
            if (is_object($value)) {
                Task8::get_recursive($value, $result);
            } else {
                $result = $result . $key . ': ' . $value . "\r\n";
            }
        }

        return $result;
    }
}
