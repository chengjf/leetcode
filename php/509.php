<?php
require "functions.php";

class Solution
{
    private $a = null;

    public function __construct()
    {
        $this->a = array_fill(0, 31, -1);
        $this->a[0] = 0;
        $this->a[1] = 1;
    }

    public function fib($N)
    {
        if ($this->a[$N] >= 0) {
            return $this->a[$N];
        } else {
            $r = $this->fib($N - 1) + $this->fib($N - 2);
            $this->a[$N] = $r;
            return $r;
        }
    }

}

$solution = new Solution();

for ($i = 0; $i <= 30; $i++) {
    //var_dump($solution->fib($i));
    P($solution->fib($i));
}
