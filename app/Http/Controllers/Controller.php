<?php

namespace App\Http\Controllers;

use App\Common\JsonBody;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

    protected function jsonSuccess($data = null, $msg = 'success')
    {
        return response()->json(new JsonBody($msg, 200, $data));
    }
}
