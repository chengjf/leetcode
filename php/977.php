<?php

class Solution
{
    public function sortedSquares($A)
    {
        $result = [];
        foreach ($A as $a) {
            array_push($result, $a * $a);
        }
        sort($result);
        return $result;
    }
}

$solution = new Solution();
$input = [
    [-4, -1, 0, 3, 10],
    [-7, -3, 2, 3, 11],
    [-7, -3, 2, 3, 11],
];
foreach ($input as $i) {
    var_dump($solution->sortedSquares($i));
}
