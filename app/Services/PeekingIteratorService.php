<?php
// PHP ArrayIterator reference:
// https://www.php.net/arrayiterator


class PeekingIteratorService
{
    /**
     * @param ArrayIterator $arr
     */

    public $arr;
    public $i;
    public $size;

    function __construct($arr)
    {
        $this->arr = $arr;
        $this->i = 0;
        $this->size = count($arr);
    }

    /**
     * @return Integer
     */
    function next()
    {
        $result = $this->arr[$this->i];
        $this->i = $this->i + 1;
        return $result;


    }

    /**
     * @return Integer
     */
    function peek()
    {
        return $this->arr[$this->i];
    }

    /**
     * @return Boolean
     */
    function hasNext()
    {
        if (isset($this->arr[$this->i])) {
            return true;
        }
        return false;

    }
}

/**
 * Your PeekingIterator object will be instantiated and called as such:
 * $obj = PeekingIterator($arr);
 * $ret_1 = $obj->next();
 * $ret_2 = $obj->peek();
 * $ret_3 = $obj->hasNext();
 */
