<?php

class MyHashMap
{
    /**
     */

    protected $array;

    function __construct()
    {
        $this->array = [];
    }

    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value)
    {

        $this->array[$key] = $value;

    }

    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key)
    {
        if (!isset($this->array[$key])) {
            return -1;
        };
        return $this->array[$key];
    }

    /**
     * @param Integer $key
     * @return NULL
     */
    function remove($key)
    {
        unset($this->array[$key]);
    }
}

/**
 * Your MyHashMap object will be instantiated and called as such:
 * $obj = MyHashMap();
 * $obj->put($key, $value);
 * $ret_2 = $obj->get($key);
 * $obj->remove($key);
 */
