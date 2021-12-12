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


    function add($data)
    {
        $node = new Node($data);
        if ($this->header == null & $this->last == null) {
            $this->header = $node;
            $this->last = $node;
        } else {
            $this->last->next = $node;
        }

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
 * Your MyLinkedListOld object will be instantiated and called as such:
 * $obj = MyLinkedListOld();
 * $ret_1 = $obj->get($index);
 * $obj->addAtHead($val);
 * $obj->addAtTail($val);
 * $obj->addAtIndex($index, $val);
 * $obj->deleteAtIndex($index);
 *
 * get(index)：获取链表中第 index 个节点的值。如果索引无效，则返回-1。
 * addAtHead(val)：在链表的第一个元素之前添加一个值为 val 的节点。插入后，新节点将成为链表的第一个节点。
 * addAtTail(val)：将值为 val 的节点追加到链表的最后一个元素。
 * addAtIndex(index,val)：在链表中的第 index 个节点之前添加值为 val  的节点。如果 index 等于链表的长度，则该节点将附加到链表的末尾。如果 index 大于链表长度，则不会插入节点。如果index小于0，则在头部插入节点。
 * deleteAtIndex(index)：如果索引 index 有效，则删除链表中的第 index 个节点。
 *
 * 来源：力扣（LeetCode）
 * 链接：https://leetcode-cn.com/problems/design-linked-list
 * 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */
