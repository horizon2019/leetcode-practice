<?php


class SingleLinkList
{
    private $header = null;
    private $last = null;
    public $size = 0;

    #https://www.cnblogs.com/Renyi-Fan/p/10873352.html

    public function __construct()
    {

    }


    public function add($data)
    {
        $node = new Node($data);
        if ($this->header == null && $this->last == null) {
            $this->header = $node;
            $this->last = $node;
        } else {
            $this->last->next = $node;
            $this->last = $node;//看不懂
        }
    }


    public function del($data)
    {
        $node = $this->header;
    }
}
