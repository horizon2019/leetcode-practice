<?php

class MyLinkedListOld
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
 * Your MyLinkedListOld object will be instantiated and called as such:
 * $obj = MyLinkedListOld();
 * $ret_1 = $obj->get($index);
 * $obj->addAtHead($val);
 * $obj->addAtTail($val);
 * $obj->addAtIndex($index, $val);
 * $obj->deleteAtIndex($index);
 *
 * get(index)：获取链表中第 index 个节点的值。如果索引无效，则返回-1。
addAtHead(val)：在链表的第一个元素之前添加一个值为 val 的节点。插入后，新节点将成为链表的第一个节点。
addAtTail(val)：将值为 val 的节点追加到链表的最后一个元素。
addAtIndex(index,val)：在链表中的第 index 个节点之前添加值为 val  的节点。如果 index 等于链表的长度，则该节点将附加到链表的末尾。如果 index 大于链表长度，则不会插入节点。如果index小于0，则在头部插入节点。
deleteAtIndex(index)：如果索引 index 有效，则删除链表中的第 index 个节点。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/design-linked-list
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */
