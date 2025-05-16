<?php

namespace Elisad5791\Mybrackets;

class BracketsChecker
{
    static public function ckeckString(string $str): string
    {
        $pattern = '/^[\(\)]+$/';
        $check = preg_match($pattern, $str);
        if (!$check) {
            return 'Invalid input string';
        }

        $stack = 0;
        $symbols = str_split($str);
        $result = false;
        foreach ($symbols as $symbol) {
            if ($symbol == '(') {
                $result = true;
                $stack++;
            } elseif ($symbol == ')') {
                if ($stack == 0) {
                    $result = false;
                    break;
                }
                $stack--;
            }
        }
        if ($stack != 0) {
            $result = false;
        }

        $resultString = $result ? 'The brackets are balanced' : 'The brackets are not balanced';
        return $resultString;
    }
}