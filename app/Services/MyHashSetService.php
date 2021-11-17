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

        if (!array_key_exists($this->array, $key)) {
            array_push($this->array, $key);
        }
        return $this->array;

    }

    /**
     * @param Integer $key
     * @return NULL
     */
    function remove($key)
    {

        foreach ($this->array as $k => $v) {
            if ($v == $key) {
                unset($this->array[$k]);
            }
        }

    }

    /**
     * @param Integer $key
     * @return Boolean
     */
    function contains($key)
    {
        foreach ($this->array as $v) {
            if ($v == $key) {
                return true;
            }
        }
        return false;
    }
}

