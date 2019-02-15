<?php
class Solution
{
    public function isToeplitzMatrix($matrix)
    {
        $ylength = count($matrix);
        $xlength = count($matrix[0]);

        for ($i = 0; $i < $ylength; $i++) {
            if (!$this->check($matrix, $i, 0)) {
                return false;
            }
        }

        for ($i = 1; $i < $xlength; $i++) {
            if (!$this->check($matrix, 0, $i)) {
                return false;
            }
        }
        return true;
    }

    private function check($matrix, $i, $j)
    {
        while (true) {
            if (array_key_exists($i, $matrix) && array_key_exists($j, $matrix[$i])) {
                if (!isset($n)) {
                    $n = $matrix[$i][$j];
                } else {
                    if ($matrix[$i][$j] !== $n) {
                        return false;
                    }
                }
                $i++;
                $j++;
            } else {
                break;
            }
        }
        return true;
    }
}

$solution = new Solution();

$input = [

    [
        [1, 2, 3, 4],
        [5, 1, 2, 3],
        [9, 5, 1, 2],
    ],
    [
        [1, 2],
        [2, 2],
    ],
    [
        [0],
    ],
    [
        [0, 0],
        [1, 1],
    ],
    [
        [1, 2, 3],
        [2, 1, 2],
        [10, 2, 1],
    ],
];

$inputx = [
    [
        [0, 0],
        [1, 1],
    ],
];

foreach ($input as $i) {
    var_dump($solution->isToeplitzMatrix($i));
}
