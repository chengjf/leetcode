<?php

class Solution
{
    public function isMonotonic($A)
    {
        $length = count($A);
        $flag;
        for ($i = 0; $i < $length - 1; $i++) {
            $a = $A[$i];
            $b = $A[$i + 1];
            if ($b === $a) {
                continue;
            }

            if (!isset($flag)) {
                $flag = ($b > $a);
            }

            $f = ($b > $a);
            if ($f != $flag) {
                return false;
            }
        }
        return true;
    }
}

$solution = new Solution();

$input = [
    [1, 2, 2, 3],
    [6, 5, 4, 4],
    [1, 3, 2],
    [1, 2, 4, 5],
    [1, 1, 1],
    range(0, 50000),
    [0, 0, 0, 0, 1, 1, 1, 2, 2, 2, 3],
    [1, 2, 3, 4, 5, 6, 7, 8, 9, 9, 0],
    [2, 2, 2, 1, 4, 5],

];

$input = [
    [1, 1, 0],
    [2, 2, 2, 1, 4, 5],
];

// $x = range(0, 50000);

foreach ($input as $i) {

    var_dump($solution->isMonotonic($i));
}
