<?php


class Node
{
    public $data = null;
    public $next = null;

    public function __construct($data, $next = null)
    {

        $this->data = $data;
        $this->next = $next;
    }

}
