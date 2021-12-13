<?php

class ReverseString
{

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s)
    {
        $l = sizeof($s) - 1;
        $f = 0;

        while ($f < $l) {
            list($s[$f], $s[$l]) = [$s[$l], $s[$f]];
            $l++;
            $f++;
        }

        return $s;
    }


    /**
     * 345. 反转字符串中的元音字母
     * 给你一个字符串 s ，仅反转字符串中的所有元音字母，并返回结果字符串。
     * 元音字母包括 'a'、'e'、'i'、'o'、'u'，且可能以大小写两种形式出现。
     */

    function reverseVowels(&$s)
    {
        $array = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

        $left = 0;
        $right = strlen($s) - 1;

        while ($left < $right) {

            //会不断循环，直到满足条件为止
            while ($left < $right && !in_array($s[$left], $array)) {
                $left++;
            }

            while ($left < $right && !in_array($s[$right], $array)) {
                $right--;
            }

            $tmp = $s[$left];
            $s[$left] = $s[$right];
            $s[$right] = $tmp;
            $left++;
            $right--;

        }

        return $s;


    }


    /**
     * @param $s
     * @return false|string[]
     * 给定一个字符串，你需要反转字符串中每个单词的字符顺序，同时仍保留空格和单词的初始顺序。
     * 输入："Let's take LeetCode contest"
     * 输出："s'teL ekat edoCteeL tsetnoc"
     */
    function reverseWords($s)
    {
        $ret = [];
        $words = explode(' ', $s);

        foreach ($words as $k=>$item) {
            $item = $this->reverseString($item);

            array_push($ret, $item);

        }

        return implode(' ', $ret);
    }
}
