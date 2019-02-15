<?php

class Solution
{
    private $a = [];

    /**
     * @param Float $x
     * @param Integer $n
     * @return Float
     */
    public function myPow($x, $n)
    {
        if ($n < 0) {
            $temp = $this->calcPow($x, -$n);
            return 1 / $temp;
        } else if ($n > 0) {
            $temp = $this->calcPow($x, $n);
            return $temp;
        } else {
            return 1;
        }
    }

    private function calcPow($x, $n)
    {
        if (isset($a[$x][$n])) {
            return $a[$x][$n];
        } else {
            //
            if ($n === 0) {
                return 1;
            }
            if ($n % 2 == 0) {
                $t = $this->calcPow($x, $n / 2);
                $result = $t * $t;
                $a[$x][$n] = $result;
                return $result;
            } else {
                return $this->calcPow($x, $n - 1) * $x;
            }

        }
    }

    public function buildInPow($x, $n)
    {
        return pow($x, $n);
    }

    public function slowPow($x, $n)
    {
        if ($n < 0) {
            $temp = $x;
            for ($i = 1; $i < -$n; $i++) {
                $temp = $temp * $x;
            }
            return 1 / $temp;
        } else if ($n > 0) {
            $temp = $x;
            for ($i = 1; $i < $n; $i++) {
                $temp = $temp * $x;
            }
            return $temp;
        } else {
            return 1;
        }
    }
}

$solution = new Solution();

/**
 * -100.0 < x < 100.0
 * n is a 32-bit signed integer, within the range [−2^31, 2^31 − 1]
 */
$input = [
    [2.00000, 10],
    [2.10000, 3],
    [2.00000, -2],
    [-100, pow(-2, 31)],
    [100, pow(-2, 31)],
    [-100, pow(2, 31) - 1],
    [100, pow(-2, 31) - 1],
    [0, 0],
    [0, 1],
    [0, -1],
    [1, 10],
];

foreach ($input as $i) {
    $a = $solution->myPow($i[0], $i[1]);
    $b = $solution->buildInPow($i[0], $i[1]);
    var_dump($a . ' ' . $b);
}
