<?php

class TwoSumServices
{
//给定一个已按照 非递减顺序排列  的整数数组 numbers ，请你从数组中找出两个数满足相加之和等于目标数 target 。
//
//函数应该以长度为 2 的整数数组的形式返回这两个数的下标值。numbers 的下标 从 1 开始计数 ，所以答案数组应当满足 1 <= answer[0] < answer[1] <= numbers.length 。


    /**
     * @param Integer[] $numberss
     * @param Integer $target
     * @return Integer[]
     */

    public $numbers = [2, 7, 11, 15];

    public $target = 9;


    //原始解法
    function twoSum()
    {

        //错误1：题目没有说只能正数相加
        //错误2：容易超出时间限制
        $numbers = $this->number;
        $target = $this->target;
        $length = count($this->number);


        for ($i = 0; $i <= $length - 2; $i++) {

//            if ($numbers[$i] > $target) {
//                return false;
//            }
            for ($j = $i + 1; $j <= $length - 1; $j++) {
//                if ($numbers[$j] > $target) {
//                    return false;
//                }
//                if (($numbers[$i] + $numbers[$j]) > $target) {
//                    return false;
//                }
                if (($numbers[$i] + $numbers[$j]) == $target) {
                    return [$i + 1, $j + 1];
                }
            }
        }


    }


    //二分法

    function twoSum1()
    {

        $numbers = $this->numbers;
        $target = $this->target;

        $i = 0;   //指针1
        $j = sizeof($numbers) - 1;  //指针2

        while ($i < $j) {
            $tmp = $numbers[$i] + $numbers[$j];
            if ($tmp == $target) {  //找到答案
                return [$i + 1, $j + 1]; //指针要加1，根据题目意思
            } else if ($tmp > $target) {
                $j--;
            } else {
                $i++;
            }
        }

        return [];


    }


    function twoSum2()
    {
        $numbers = $this->numbers;
        $target = $this->target;

        $len = sizeof($numbers);
        for ($i = 0; $i < $len; $i++) { //循环里面使用二分搜索查找
            $find = $target - $numbers[$i];
            $res = $this->search($numbers, $find, $i + 1, $len - 1);
            if ($res != -1) {   //找到结果
                return [$i + 1, $res + 1];
            }
        }

        return [];

    }

    //二分搜索函数
    function search($arr, $search, $l, $r)
    {
        while ($l <= $r) {
            $mid = $l + floor(($r - $l) / 2);
            if ($arr[$mid] == $search) {
                return $mid;
            } else if ($arr[$mid] < $search) {
                $l = $mid + 1;
            } else {
                $r = $mid - 1;
            }
        }
        return -1;
    }

}
