<?php

class Solution
{
    public function validMountainArray($A)
    {
        $length = count($A);
        if ($length < 3) {
            return false;
        }
        $increaseFlag = false;
        $decreaseFlag = false;
        $last = null;
        foreach ($A as $a) {
            if ($last === null) {
                $last = $a;
            } else {
                if ($a > $last) {
                    // increase
                    if ($decreaseFlag) {
                        return false;
                    }
                    $increaseFlag = true;
                } else if ($a < $last) {
                    // decrease
                    if (!$increaseFlag) {
                        return false;
                    }
                    $decreaseFlag = true;
                } else {
                    return false;
                }
                $last = $a;
            }
        }
        return $increaseFlag && $decreaseFlag;
    }
}

$solution = new Solution();

$input = [
    [2, 1],
    [3, 5, 5],
    [0, 3, 2, 1],
    [5, 4, 3],
    [1, 2, 3],
    [1, 2, 3,2,3],
];

$inputx = [
    [2, 1],
];

foreach ($input as $i) {
    var_dump($solution->validMountainArray($i));
}
