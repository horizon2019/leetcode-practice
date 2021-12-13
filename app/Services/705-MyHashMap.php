<?php

class MyHashMap
{
    /**
     * 705. 设计哈希集合
     * 不使用任何内建的哈希表库设计一个哈希集合（HashSet）。
     *
     * 实现 MyHashSet 类：
     *
     * void add(key) 向哈希集合中插入值 key 。
     * bool contains(key) 返回哈希集合中是否存在这个值 key 。
     * void remove(key) 将给定值 key 从哈希集合中删除。如果哈希集合中没有这个值，什么也不做。
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
        }
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
