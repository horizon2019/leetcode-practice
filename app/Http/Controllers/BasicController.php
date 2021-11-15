<?php

namespace App\Http\Controllers;


class BasicController extends Controller
{

    /**
     * 给定一个n个元素有序的（升序）整型数组nums 和一个目标值target ，写一个函数搜索nums中的 target，如果目标值存在返回下标，否则返回 -1。
     *
     */

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function binarySearch($nums, $target)
    {
        $length = count($nums);
        $middle = intval($length / 2);

        if ($target == $nums[$middle]) {
            return $middle;
        }

        if ($target < $nums[$middle]) {
            $nums = array_slice($nums, 0, $middle - 1);
            $this->search($nums, $target);
        }

        if ($target > $nums[$middle]) {
            $nums = array_slice($nums, $middle, $length - $middle);
            $this->search($nums, $target);
        }

        return -1;


    }
}
