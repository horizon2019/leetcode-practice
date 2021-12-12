<?php


class Node
{

    public $val;
    public $next;

    public function __construct($val = null, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }


}

class MyLinkedList
{

    public $size;
    public $head;

    /**
     */
    function __construct()
    {
        $this->head = new Node();
        $this->size = 0;
    }

    /**
     * @param Integer $index
     * @return Integer
     */
    function get($index)
    {
        //如果索引无效，则返回-1。
        if ($index > $this->size - 1) {
            return -1;
        }

        $pre = $this->head->next;
        for ($i = 0; $i <= $index; $i++) {
            if ($index == $i) {
                return $pre->val;
            }
            $pre = $pre->next;
        }

        return -1;

    }

    /**
     * @param Integer $val
     * @return NULL
     */
    function addAtHead($val)
    {

        $pre = $this->head;
        $pre->next = new Node($val, $pre->next);
        $this->size++;

    }

    /**
     * @param Integer $val
     * @return NULL
     */
    function addAtTail($val)
    {
        $size = $this->size;
        $prev = $this->head;
        for ($i = 0; $i < $size; $i++) {
            $prev = $prev->next;
        }
        $prev->next = new Node($val, $prev->next);
        $this->size++;
    }

    /**
     * @param Integer $index
     * @param Integer $val
     * @return NULL
     */
    function addAtIndex($index, $val)
    {
        if ($index > $this->size) {
            return -1;
        }

        $prev = $this->head;
        for ($i = 0; $i < $index; $i++) {
            $prev = $prev->next;
        }

        $prev->next = new Node($val, $prev->next);
        $this->size++;

    }

    /**
     * @param Integer $index
     * @return NULL
     */
    function deleteAtIndex($index)
    {
        if ($index > $this->size - 1) {
            return -1;
        }

        $prev = $this->head;
        for ($i = 0; $i <= $index; $i++) {
            if ($i == $index) {
                $prev->next = $prev->next->next;
            }
            $prev = $prev->next;
        }

        $this->size--;

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
