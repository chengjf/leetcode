<?php

class Solution
{
    public function checkPerfectNumber($num)
    {
        if ($num <= 0) {
            return false;
        }
        $a = $this->getAllDivisors($num);
        $sum = array_sum($a);
        return $sum == $num;
    }

    private function getAllDivisors($num)
    {

        $result = array();
        $t = floor($num / 2);
        for ($i = 1; $i <= $t; $i++) {
            if ($num % $i === 0) {
                $j = $num / $i;
                if ($i <= $j) {
                    array_push($result, $i);
                    if (($i != $j) && ($j != $num)) {
                        array_push($result, $j);
                    }
                } else {
                    break;
                }
            }
        }
        return $result;
    }
}

$solution = new Solution();

$result = $solution->checkPerfectNumber(0);
var_dump($result);
