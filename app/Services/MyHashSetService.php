<?php

class MyHashSetService extends \App\Services\Service
{

    /**
     * Your MyHashSetService object will be instantiated and called as such:
     * $obj = MyHashSetService();
     * $obj->add($key);
     * $obj->remove($key);
     * $ret_3 = $obj->contains($key);
     */

    /**
     */

    protected $array;

    function __construct()
    {

        $this->array = [];
    }

    /**
     * @param Integer $key
     * @return NULL
     */
    function add($key)
    {

        array_push($array, $key);
        return true;

    }

    /**
     * @param Integer $key
     * @return NULL
     */
    function remove($key)
    {


    }

    /**
     * @param Integer $key
     * @return Boolean
     */
    function contains($key)
    {
        if (array_key_exists($this->array, $key)) {
            return true;
        }
        return false;
    }
}

