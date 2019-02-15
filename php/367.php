<?php

class Solution
{
    public function isPerfectSquare($num)
    {
        if ($num <= 0) {
            return false;
        }
        return $this->find($num, 0, $num);
    }

    private function find($num, $start, $end)
    {
        if (($end - $start) == 1) {
            return ($start * $start == $num) || ($end * $end == $num);
        }
        $p = round(($end - $start) / 2 + $start);
        $t = $p * $p;
        if ($t == $num) {
            return true;
        } else if ($t > $num) {
            return $this->find($num, $start, $p);
        } else {
            return $this->find($num, $p, $end);
        }

    }

}

function P($obj)
{
    var_dump($obj);
}

$s = new Solution();

P($s->isPerfectSquare(1));
P($s->isPerfectSquare(2));
P($s->isPerfectSquare(3));
P($s->isPerfectSquare(4));
P($s->isPerfectSquare(16));
P($s->isPerfectSquare(9801));
