<?php

class Solution
{
    public function majorityElement($nums)
    {
        $length = count($nums);
        $times = $length / 2;
        $a = array_count_values($nums);
        $result = array_filter($a, function ($n) use ($times) {
            return $n >= $times;
        });
        return array_keys($result)[0];
    }
}

$solution = new Solution();

$input = [
    [3, 2, 3],
    [2, 2, 1, 1, 1, 2, 2],
    [1],
    [1, 1],
];

foreach ($input as $i) {
    var_dump($solution->majorityElement($i));
}
