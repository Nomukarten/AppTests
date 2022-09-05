<?php

namespace src;

class Task2
{
    public function main(string $date): int
    {
        $isdate = preg_match('/^(\d{2})\.(\d{2}).(\d{4})$/', $date, $arr);
        if ($isdate) {
            if ($arr[3] < 2038) {
                if ((int)$arr[2] >= 1 and (int)$arr[2] <= 12) {
                    if ((int)$arr[1] <= ((int)$arr[2] === 2 ? (((int)$arr[3] & 3 or !((int)$arr[3] % 25) and (int)$arr[3] & 15) ? 28 : 29) : (30 + ((int)$arr[2] + ((int)$arr[2] >> 3) & 1)))) {
                        return Task2::count_days((int)$arr[1], (int)$arr[2], (int)$arr[3]);
                    } else {
                        throw new \InvalidArgumentException();
                    }
                }
            }
        }
    }

    public function count_days(int $day, int $month, int $year): int
    {
        $retvalue = 0;
        $curdate = date('z') + 1;
        $birthdate = date('z', mktime(0, 0, 0, $month, $day, $year)) + 1;
        if ($birthdate > $curdate) {
            $retvalue = $birthdate - $curdate - 1;
        } else {
            $nyear = (date('y') & 3 or !(date('y') % 25) and date('y') & 15) ? 365 : 366;
            $retvalue = $nyear + ($birthdate - $curdate - 1);
        }

        return $retvalue;
    }
}
