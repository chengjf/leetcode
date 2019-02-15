<?php

class Solution
{
    public function transpose($A)
    {
        $result = [];
        $length = count($A);

        for ($i = 0; $i < $length; $i++) {
            $size = count($A[$i]);
            for ($j = 0; $j < $size; $j++) {
                if (!isset($result[$j])) {
                    $result[$j] = [];
                }
                array_push($result[$j], $A[$i][$j]);
            }
        }
        return $result;
    }
}

$solution = new Solution();

$input = [
    [[1, 2, 3], [4, 5, 6], [7, 8, 9]],
    [[1, 2, 3], [4, 5, 6]],
];

foreach ($input as $i) {
    var_dump($solution->transpose($i));
}
