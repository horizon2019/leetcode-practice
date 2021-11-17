<?php

namespace App\Services;

class BasicService extends \App\Services\Service
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
        $low = 0;
        $high = $length - 1;

        if ($target > $nums[$high] || $target < $nums[$low]) {
            return -1;
        }

        while ($nums[$low] <= $nums[$high]) {

            $middle = intval(($low + $high) / 2);
            if ($target > $nums[$middle]) {
                $low = $middle + 1;
            } elseif ($target < $nums[$middle]) {
                $high = $middle - 1;
            } else {
                return $middle;
            }

        }

        return -1;

    }


    /**
     * 错误
     */


    public function errorBinarySearch($nums, $target)
    {

        $length = count($nums);
        $middle = intval($length / 2);


        if ($target == $nums[$middle]) {
            return $middle;
        }

        if ($target < $nums[$middle]) {
            $newNums = array_slice($nums, 0, $middle - 1);
            $this->binarySearch($newNums, $target);
        }

        if ($target > $nums[$middle]) {
            $newNums = array_slice($nums, $middle, $length - $middle);
            $this->binarySearch($newNums, $target);
        }

        return -1;
    }


}
