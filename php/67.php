<?php
class Solution
{
    public function addBinary($a, $b)
    {
        $aLength = strlen($a);
        $bLength = strlen($b);
        if ($aLength >= $bLength) {
            // based on a
            return implode($this->add($a, $b));
        } else {
            return implode($this->add($b, $a));
        }
    }

    private function add($a, $b)
    {
        $s1 = str_split($a);
        $s2 = str_split($b);
        $s1 = array_reverse($s1);
        $s2 = array_reverse($s2);

        for ($i = 0; $i < count($s2); $i++) {
            if ($s2[$i] == 1) {
                if ($s1[$i] == 0) {
                    $s1[$i] = 1;
                } else {
                    $s1[$i] = 0;
                    $this->adjust($s1, $i + 1);
                }
            }
        }
        // var_dump($s1);
        return array_reverse($s1);
    }

    private function adjust(&$a, $i)
    {
        while (true) {
            if (count($a) == $i) {
                $a[$i] = 1;
                break;
            }
            if ($a[$i] == 1) {
                $a[$i] = 0;
            } else {
                $a[$i] = 1;
                break;
            }
            $i++;
        }
    }
}

$solution = new Solution();
$a = "10100000100100110110010000010101111011011001101110111111111101000000101111001110001111100001101";
$b = "110101001011101110001111100110001010100001101011101010000011011011001011101111001100000011011110011";
//"110111101100010011000101110110100000011101000101011001000011011000001100011110011010010011000000000"
// $a = "11";
// $b = "111";

var_dump($solution->addBinary($a, $b));

$c = bindec($a) + bindec($b);
var_dump(decbin($c));
