<?php

class Solution
{
    public function moveZeroes(&$nums)
    {
        $length = count($nums);

        $zeroIndex = -1;
        for ($i = 0; $i < $length; $i++) {
            $current = $nums[$i];
            if ($current === 0) {
                if ($zeroIndex == -1) {
                    $zeroIndex = $i;
                }
            } else {
                if ($zeroIndex != -1) {
                    $this->swap($nums, $i, $zeroIndex);
                }
            }
        }
    }

    private function swap(&$nums, $i, $j)
    {
        $temp = $nums[$i];
        $nums[$i] = $nums[$j];
        $nums[$j] = $temp;
    }

    private function findNextZero($nums, $index, $end)
    {
        while (true) {
            $index++;
            if ($nums[$index] == 0 && $index < $end) {
                return $index;
            }
        }
        return -1;
    }
}

$solution = new Solution();

$input = [
    [0, 1, 0, 3, 12],
];

foreach ($input as $i) {
    $solution->moveZeroes($i);
    var_dump($i);
}
