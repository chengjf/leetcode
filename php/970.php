<?php

class Solution
{
    public function powerfulIntegers($x, $y, $bound)
    {
        $s = [];
        for ($i = 0;; $i++) {
            if (pow($x, $i) > $bound) {
                break;
            }

            for ($j = 0;; $j++) {
                $r = pow($x, $i) + pow($y, $j);
                if ($r <= $bound) {
                    array_push($s, $r);
                } else {
                    break;
                }

                if ($y === 1) {
                    break;
                }
            }

            if ($x === 1) {
                break;
            }
        }

        $s = array_unique($s);
        return $s;

    }
}

$solution = new Solution();
$input = [
    [2, 3, 10],
    [47, 97, 1000000],
    [1, 1, 0],
    [1, 1, 2],
    [20,20,1000000],
    [1,1,1000000],
];
foreach ($input as $i) {
    var_dump($solution->powerfulIntegers($i[0], $i[1], $i[2]));
}
