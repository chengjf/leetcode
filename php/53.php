<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function maxSubArray($nums)
    {
        $l = [];
        $length = count($nums);
        for ($i = 0; $i < $length; $i++) {
            if ($i === 0) {
                array_push($l, $nums[$i]);
            } else {
                if ($l[$i - 1] < 0) {
                    array_push($l, $nums[$i]);
                } else {
                    array_push($l, $nums[$i] + $l[$i - 1]);
                }
            }
        }
        return max($l);
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
];

foreach ($input as $i) {
    var_dump($solution->maxSubArray($i));
}
