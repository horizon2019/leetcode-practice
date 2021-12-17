<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */

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

class MiddleNode
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
     * @param Node $head
     * @return Node
     */
    function middleNode($head)
    {
        $slow = $head;
        $fast = $head;
        //快指针走的速度是慢指针的两倍
        while ($fast != null && $fast->next != null) {
            $slow = $slow->next;
            $fast = $fast->next->next;
        }

        return $slow;


    }


}
