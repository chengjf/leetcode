<?php

class Solution
{
    public function arrayPairSum($nums)
    {
        sort($nums);
        $length = count($nums);
        $result = [];
        for ($i = 0; $i < $length; $i = $i + 2) {
            array_push($result, $nums[$i]);
        }
        return array_sum($result);
    }
}

$solution = new Solution();

$input = [
    [1, 4, 3, 2],
    [-1, -5, -10, -20],
];

foreach ($input as $i) {
    var_dump($solution->arrayPairSum($i));
}
