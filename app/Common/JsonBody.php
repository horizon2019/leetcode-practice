<?php


namespace App\Common;


class JsonBody
{
    public $msg;
    public $code;
    public $data;

    /**
     * JsonBody constructor.
     * @param $msg
     * @param $code
     * @param $data
     */
    public function __construct($msg, $code, $data = [])
    {
        $this->msg = $msg;
        $this->code = $code;
        $this->data = $data;
    }
}
