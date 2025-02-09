<?php

namespace Mybrackets;

class BracketsChecker
{
    static public function ckeckString($str)
    {
        $pattern = '/^[\(\)]+$/';
        $check = preg_match($pattern, $str);
        if (!$check) {
            return false;
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

        return $result;
    }
}