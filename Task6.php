<?php

namespace src;

class Task6
{
    private static $arr = [1 => 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    public function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'): int
    {
        if ($year >= 2038 or $lastYear >= 2038) {
            throw new \InvalidArgumentException();
        }

        if (($month < 1 and $month > 12) or ($lastMonth < 1 and $lastMonth > 12)) {
            throw new \InvalidArgumentException();
        }

        $numDay = 0;
        foreach (Task6::$arr as $key => $value) {
            if (strtolower($day) == strtolower($value)) {
                $numDay = $key;
            }
        }
        if ($numDay == 0) {
            throw new \InvalidArgumentException();
        }

        $count = 0;
        $fday = date('w', mktime(0, 0, 0, $month, 1, $year));
        $monthlim = $month;
        $limit = 12;

        for ($fyear = $year; $fyear <= $lastYear; $fyear++) {
            if ($fyear == $lastYear) {
                $limit = $lastMonth;
            }

            for ($fmonth = $monthlim; $fmonth <= $limit; $fmonth++) {
                $passDays = ($fmonth === 2 ? (($fyear & 3 or !$fyear % 25 and $fyear & 15) ? 28 : 29) : (30 + ($fmonth + ($fmonth >> 3) & 1))) - 28;
                $fday = Task6::add($fday, $passDays);
                if ($fday === $numDay) {
                    $count++;
                }
            }
            $monthlim = 1;
        }

        return $count;
    }

    private function add(int $val1, int $val2): int
    {
        $answ = $val1 + $val2;
        if ($answ > 7) {
            $answ = $answ - 7;
        }

        return $answ;
    }
}
