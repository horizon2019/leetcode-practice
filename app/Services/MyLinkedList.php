<?php

class MyLinkedList
{

    protected $array;

    /**
     */
    function __construct()
    {
        $this->array = [];
    }

    /**
     * @param Integer $index
     * @return Integer
     */
    function get($index)
    {
        if ($index >= count($this->array) || $index < 0) {
            return -1;
        }
        return $this->array[$index];

    }

    /**
     * @param Integer $val
     * @return NULL
     */
    function addAtHead($val)
    {
        $length = count($this->array);
        for ($i = $length; 0 < $i && $i <= count($this->array) - 1; $i--) {
            $this->array[$i] = $this->array[$i - 1];
        }
        $this->array[0] = $val;
        return $this->array;
    }

    /**
     * @param Integer $val
     * @return NULL
     */
    function addAtTail($val)
    {
        $length = count($this->array);
        $this->array[$length] = $val;
        return $this->array;
    }

    /**
     * @param Integer $index
     * @param Integer $val
     * @return NULL
     */
    function addAtIndex($index, $val)
    {
        $length = count($this->array);
        if ($index == $length) {
            return $this->addAtTail($val);
        } elseif ($index == 0) {
            return $this->addAtHead($val);
        } elseif ($index > $length) {
            return $this->array;
        } elseif ($index < 0 && $index < $length) {

            for ($i = $length; $index + 1 <= $i && $i < count($this->array); $i--) {
                $this->array[$i] = $this->array[$i - 1];
            }
            $this->array[$index] = $val;
            return $this->array;
        }

    }

    /**
     * @param Integer $index
     * @return NULL
     */
    function deleteAtIndex($index)
    {

        $length = count($this->array);
        if ((0 <= $index) || ($index <= $length - 1)) {
            unset($this->array[$index]);
        }
        return $this->array;
    }
}

/**
 * Your MyLinkedList object will be instantiated and called as such:
 * $obj = MyLinkedList();
 * $ret_1 = $obj->get($index);
 * $obj->addAtHead($val);
 * $obj->addAtTail($val);
 * $obj->addAtIndex($index, $val);
 * $obj->deleteAtIndex($index);
 */
