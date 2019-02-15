<?php
class Solution
{
    public function sortArrayByParityII($A)
    {
        $odd = [];
        $even = [];

        foreach ($A as $a) {
            if ($a % 2 === 0) {
                array_push($even, $a);
            } else {
                array_push($odd, $a);
            }
        }
        $result = [];
        for ($i = 0;; $i++) {
            if (array_key_exists($i, $even)) {
                array_push($result, $even[$i]);
            } else {
                break;
            }
            if (array_key_exists($i, $odd)) {
                array_push($result, $odd[$i]);
            } else {
                break;
            }
        }
        return $result;
    }
}

$solution = new Solution();

$input = [
    [4, 2, 5, 7],
];

foreach ($input as $i) {
    var_dump($solution->sortArrayByParityII($i));
}
