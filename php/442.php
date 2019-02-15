<?php

class Solution
{
    public function findDuplicates($nums)
    {
        $length = count($nums);
        if ($length === 0) {
            return [];
        }
        $a = array_fill(1, $length, 0);

        foreach ($nums as $n) {
            $a[$n]++;
        }
        $result = array_filter($a, function ($n) {
            return $n === 2;
        });
        return array_keys($result);
    }
}

$solution = new Solution();

$input = [
    [4, 3, 2, 7, 8, 2, 3, 1],
    [],
    [1],
    [1, 1],
];

foreach ($input as $i) {
    var_dump($solution->findDuplicates($i));
}
