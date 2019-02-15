<?php
class Solution
{
    public function jump($nums)
    {
        $length = count($nums);

        $maxIndex = 0;
        $minSteps = 0;
        $a = [];
        for ($i = 0; $i < $length; $i++) {
            $steps = $nums[$i];
            $t = array_fill(0, $length, null);
            $m = $this->getMinSteps($a, $i);
            for ($j = $i; $j < $length; $j++) {
                if ($j === $i) {
                    $t[$j] = $m;
                } else if ($j <= $i + $steps) {
                    $t[$j] = $m + 1;
                }
            }
            array_push($a, $t);
        }
        // var_dump($a);

        return $this->getMinSteps($a, $length - 1);

    }

    private function getMinSteps($a, $index)
    {
        if ($index <= 0) {
            return 0;
        }
        $min = null;
        foreach ($a as $i) {
            $min = empty($min) ? (empty($i[$index]) ? $min : $i[$index]) : min($min, (empty($i[$index]) ? $min : $i[$index]));
        }
        return $min;
    }
}

$solution = new Solution();

$input = [
    [2, 3, 1, 1, 4],
    [2, 2, 1, 1, 4],
    [1],
];

foreach ($input as $i) {
    var_dump($solution->jump($i));
}
