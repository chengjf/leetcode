<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function maxProduct($nums)
    {
        $l = [];
        $h = [];
        $length = count($nums);
        for ($i = 0; $i < $length; $i++) {
            if ($i === 0) {
                array_push($l, $nums[$i]);
                array_push($h, $nums[$i]);
            } else {
                if ($nums[$i] !== 0) {
                    $hh = $nums[$i] * $h[$i - 1];
                    $ll = $nums[$i] * $l[$i - 1];
                    $max = max($hh, $ll, $nums[$i]);
                    array_push($h, $max);
                    $min = min($hh, $ll, $nums[$i]);
                    array_push($l, $min);
                } else {
                    array_push($h, 0);
                    array_push($l, 0);
                }
            }
        }
        var_dump($l);
        var_dump($h);
        return max($h);
    }
}

$solution = new Solution();

$input = [
    [3, 2, 3],
    [2, 2, 1, 1, 1, 2, 2],
    [1],
    [1, 1],
    [-2, 1, -3, 4, -1, 2, 1, -5, 4],
    [100, -50, -40, 100],
    [2, 3, -2, 4],
    [-2, 0, -1],
    [1, 2, 3, 4, -5, 6, 7, 8, 9, 0, 1, -2],
    [-4, -3],
    [-1, 0, -2, -0, -3, -0, -4],
    [-3, -4, 3, 4, -6, -7, -9, 100],
    [-2],
    [-2, 0],
    [-2, 0, 2],
];

$inputx = [
    [-3, -4, 3, 4, -6, -7, -9, 100],
];
foreach ($input as $i) {
    var_dump($solution->maxProduct($i));
}
