<?php
class Solution
{
    public function isPowerOfFour($num)
    {
        var_dump($num & ($num - 1));
        var_dump(($num & 0x55555555));
        return (($num & ($num - 1)) === 0) && (($num & 0x55555555) != 0) && ((($num & 0x55555555) & (($num & 0x55555555) - 1)) === 0);
    }
}

$s = new Solution();

$result = $s->isPowerOfFour(2);

var_dump($result);

$a = pow(4, 2);
var_dump($a);
