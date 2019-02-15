<?php

class Solution
{
    public function canJump($nums)
    {
        $length = count($nums);

        $maxIndex = 0;

        for ($i = 0; $i <= $maxIndex; $i++) {
            $steps = $nums[$i];
            $currentMaxIndex = $i + $steps;
            $maxIndex = max($maxIndex, $currentMaxIndex);
            if ($currentMaxIndex >= ($length - 1)) {
                return true;
            }
        }

        return false;
    }

}

$solution = new Solution();

$input = [
    [2, 3, 1, 1, 4],
    [3, 2, 1, 0, 4],
    [2, 3, 1, 4, 5],
    [1, 1],
    [2, 5, 0, 0],
];

foreach ($input as $i) {
    var_dump($solution->canJump($i));
}
