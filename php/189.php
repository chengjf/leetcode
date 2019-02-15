<?php

class Solution
{
    public function rotate(&$nums, $k)
    {
        $length = count($nums);
        // true rotate count
        $j = $k % $length;
        //
        for ($i = 0; $i < $j; $i++) {
            $this->rotate1($nums);
        }
    }

    private function rotate1(&$nums)
    {
        $length = count($nums);
        $n = $nums[$length - 1];
        for ($i = ($length - 1); $i >= 0; $i--) {
            if ($i === 0) {
                $nums[$i] = $n;
            } else {
                $nums[$i] = $nums[$i - 1];
            }
        }
    }
}

$solution = new Solution();

$input = [
    [1, 2, 3, 4, 5, 6, 7],
    [-1, -100, 3, 99],
];

foreach ($input as $i) {
    $solution->rotate($i, 4);
    var_dump($i);
}
