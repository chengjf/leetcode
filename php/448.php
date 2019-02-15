<?php

class Solution
{
    public function findDisappearedNumbers($nums)
    {
        $length = count($nums);
        if ($length === 0) {
            return [];
        }
        $a = range(1, count($nums));

        foreach ($nums as $n) {
            // $a[$n-1] = 0;
            unset($a[$n - 1]);
        }
        return $a;
    }
}

$solution = new Solution();

$input = [
    [4, 3, 2, 7, 8, 2, 3, 1],
    [],
    [1],
    [1,1]
];

foreach ($input as $i) {
    var_dump($solution->findDisappearedNumbers($i));
}
