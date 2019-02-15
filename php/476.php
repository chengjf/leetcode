<?php

class Solution
{
    public function findComplement($num)
    {
        $resultStr = $this->do(decbin($num));
        return bindec($resultStr);
    }

    function do($numStr) {
        $strArray = str_split($numStr);
        $result = [];
        foreach ($strArray as $str) {
            array_push($result, 1 - $str);
        }
        return implode($result);
    }
}

$solution = new Solution();
$input = [0, 1, 2, 3, 4, 5, 10, 100, 1000, 100000];
// $input = [2];
foreach ($input as $i) {
    var_dump($solution->findComplement($i));
}
