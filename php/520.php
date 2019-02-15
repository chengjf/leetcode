<?php
class Solution
{
    public function detectCapitalUse($word)
    {
        return $this->isAllUppercase($word) or $this->isAllLowercase($word) or $this->isCapital($word);
    }

    private function isAllUppercase($word)
    {
        return $word == strtoupper($word);
    }

    private function isAllLowercase($word)
    {
        return $word == strtolower($word);
    }

    private function isCapital($word)
    {
        $head = substr($word, 0, 1);
        $others = substr($word, 1);
        return ($head == strtoupper($head)) and ($others == strtolower($others));
    }

}

$solution = new Solution();
$words = ['USA', 'FlaG', 'aLa Flag', ' ', 'USE Ua'];
foreach ($words as $word) {
    var_dump($solution->detectCapitalUse($word));
}
