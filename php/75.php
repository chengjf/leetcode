<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @return NULL
     */
    public function sortColors(&$nums)
    {
        $length = count($nums);
        $start = 0;
        $end = $length - 1;
        $index = 0;
        while (true) {
            if ($index >= $length) {
                break;
            }

            if ($index > $end) {
                break;
            }

            $t = $nums[$index];
            if ($t === 0) {
                // swap to front
                $temp = $nums[$start];
                $nums[$start] = $t;
                $nums[$index] = $temp;
                $start = $start + 1;
                $index = $index + 1;
            } else if ($t === 1) {
                // nothing to do
                $index = $index + 1;
            } else if ($t === 2) {
                // swap to end
                while ($end > $start && $nums[$end] === 2) {
                    $end = $end - 1;
                }

                if ($end <= 0) {
                    break;
                }

                if ($end < $index) {
                    break;
                }

                $temp = $nums[$end];
                $nums[$end] = $t;
                $nums[$index] = $temp;
                $end = $end - 1;
                if ($temp != 0) {
                    $index = $index + 1;
                }
            }
            // var_dump($nums);
            // var_dump($index);

        }
    }

}

$solution = new Solution();

$input = [
    [2, 0, 2, 1, 1, 0],
    [0, 1, 2, 0, 1, 2],
    [0, 0, 0, 0, 0, 0],
    [1, 1, 1, 1, 1, 1, 1],
    [2, 2, 2, 2, 2, 2, 2],
    [2, 2, 2, 0, 0, 0, 1, 1, 1],
    [2, 2, 2, 1, 1, 1, 0, 0, 0],
    [0, 2],
    [0, 1],
    [1, 2],
    [0, 1, 2],
    [1, 2, 0],
    [2, 1, 0],
];

$inputx = [
    // [0, 1, 2],
    [1, 2, 0],

];

foreach ($input as $i) {
    $solution->sortColors($i);
    var_dump($i);
}
