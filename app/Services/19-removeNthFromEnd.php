<?php

/**
 * Definition for a singly-linked list.
 */

class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution
{

    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n)
    {

        //1.快慢指针解法
        $dummy = new ListNode(null);
        $dummy->next = $head;//虚拟头指针，指向头节点

        $slow = $fast = $dummy;

        //快指针比慢指针多走n步
        for ($i = 0; $i <= $n; ++$i) {
            $fast = $fast->next;
        }

        while ($fast !== null) {
            $fast = $fast->next;
            $slow = $slow->next;
        }

        $slow->next = $slow->next->next;
        return $dummy->next;

    }

    function removeNthFromEnd2($head, $n)
    {
        $len = 0;//链表长度
        $dummyHead = new ListNode(null);//虚拟头结点
        $dummyHead->next = $head;
        while ($head) {//迭代求出长度
            $head = $head->next;
            $len++;
        }
        $head = $dummyHead;
        for ($i = 1; $i <= $len - $n; $i++) {//找到待删除节点的前一个节点
            $head = $head->next;
        }
        $head->next = $head->next->next;//删除节点
        return $dummyHead->next;

    }


}
