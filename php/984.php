<?php

class Solution
{

    /**
     * @param Integer $A
     * @param Integer $B
     * @return String
     */
    public function strWithout3a3b($A, $B)
    {
        $s = [];
        if ($A >= $B) {
            $s = $this->calc($A, $B, 'a', 'b');
        } else {
            $s = $this->calc($B, $A, 'b', 'a');
        }
        return implode('', $s);
    }

    private function calc($a, $b, $aS, $bS)
    {
        $s = [];
        // two combination number
        $n = $a - $b;
        $nCount = 0;
        $bCount = 0;
        $aCount = 0;
        while (true) {
            if ($nCount < $n) {
                // push double a and one b
                if ($a - $aCount >= 2) {
                    array_push($s, $aS);
                    array_push($s, $aS);
                    $aCount = $aCount + 2;
                } else if ($a - $aCount >= 1) {
                    array_push($s, $aS);
                    $aCount = $aCount + 1;
                }

                if ($b - $bCount >= 1) {
                    array_push($s, $bS);
                    $bCount = $bCount + 1;
                }
                $nCount = $nCount + 1;
            } else {
                // push one a and one b
                if ($a - $aCount >= 1) {
                    array_push($s, $aS);
                    $aCount = $aCount + 1;
                }
                if ($b - $bCount >= 1) {
                    array_push($s, $bS);
                    $bCount = $bCount + 1;
                }
            }
            if (($aCount === $a) && ($bCount === $b)) {
                break;
            }
        }
        return $s;
    }

}

$solution = new Solution();
$input = [
    [0, 0],
    [0, 1],
    [1, 1],
    [0, 2],
    [1, 2],
    [4, 1],
    [100, 90],
    [4, 3],
    [3,4],
    [3,5],
    [3,6],
];

$inputx = [
    [1, 0],
];
foreach ($input as $i) {
    var_dump($solution->strWithout3a3b($i[0], $i[1]));
}
