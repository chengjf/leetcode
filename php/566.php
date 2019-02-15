<?php

class Solution
{
    public function matrixReshape($nums, $r, $c)
    {
        $rowLength = count($nums);
        $columnLength = count($nums[0]);

        $arr = $this->flatten($nums);
        if (($r * $c) != ($rowLength * $columnLength)) {
            // do not change
            return $nums;
        } else {
            $result = [];
            $index = 0;
            for ($i = 0; $i < $r; $i++) {
                $temp = [];
                for ($j = 0; $j < $c; $j++) {
                    array_push($temp, $arr[$index]);
                    $index++;
                }
                array_push($result, $temp);
            }
            return $result;
        }
    }

    private function flatten(array $array)
    {
        $return = array();
        array_walk_recursive($array, function ($a) use (&$return) {$return[] = $a;});
        return $return;
    }
}

$solution = new Solution();

$input = [
    [
        [1, 2],
        [3, 4],
    ],
];

foreach ($input as $i) {
    var_dump($solution->matrixReshape($i, 4, 1));
}
