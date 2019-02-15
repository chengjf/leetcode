<?php

class Solution
{
    public function isOneBitCharacter($bits)
    {
        $length = count($bits);

        for ($i = 0; $i < $length;) {
            $b = $bits[$i];
            if ($b === 0) {
                if ($i === ($length - 1)) {
                    return true;
                }
                $i++;
            } else {
                $i = $i + 2;
            }
        }

        return false;
    }
}

$solution = new Solution();

$input = [
    [1, 0, 0],
    [1, 1, 1, 0],
    [1, 1, 1, 1, 0],
    [0],
    [1, 1],
    [1, 0],
];

foreach ($input as $i) {
    var_dump($solution->isOneBitCharacter($i));
}
