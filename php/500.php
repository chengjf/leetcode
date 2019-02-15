<?php

class Solution
{
    private $map = [
        'q' => 1,
        'w' => 1,
        'e' => 1,
        'r' => 1,
        't' => 1,
        'y' => 1,
        'u' => 1,
        'i' => 1,
        'o' => 1,
        'p' => 1,
        'a' => 2,
        's' => 2,
        'd' => 2,
        'f' => 2,
        'g' => 2,
        'h' => 2,
        'j' => 2,
        'k' => 2,
        'l' => 2,
        'z' => 3,
        'x' => 3,
        'c' => 3,
        'v' => 3,
        'b' => 3,
        'n' => 3,
        'm' => 3,
    ];
    public function findWords($words)
    {
        $result = [];
        foreach ($words as $word) {
            if ($this->checkWord($word)) {
                array_push($result, $word);
            }
        }
        return $result;
    }

    private function checkWord($word)
    {
        $strArray = str_split(strtolower($word));
        $flag = 0;
        foreach ($strArray as $s) {
            $line = $this->map[$s];
            if ($line != false) {
                if ($flag == 0) {
                    $flag = $line;
                    continue;
                }
                if ($flag != $line) {
                    return false;
                }
            } else {
                return false;
            }
        }
        return true;
    }
}

$solution = new Solution();
$input = ["Hello", "Alaska", "Dad", "Peace", "", "a", "$"];
var_dump($solution->findWords($input));
