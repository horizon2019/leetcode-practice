<?php

class Rotate
{

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k)
    {


        $length = count($nums);


        if ($length != 1 && $k != 0 && $length != $k) {
            if ($length < $k) {
                $k -= $length;
            }
            $nums = array_merge(array_slice($nums, 0 - $k, count($nums) - 1), array_slice($nums, 0, count($nums) - $k));
        }

        return $nums;


    }
}
