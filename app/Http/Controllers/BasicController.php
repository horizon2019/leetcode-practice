<?php

namespace App\Http\Controllers;


use App\Services\BasicService;
use Illuminate\Http\Request;

class BasicController extends Controller
{


    protected $service;

    public function __construct()
    {
        $this->service = app(BasicService::class);
    }

    public function binarySearch(Request $request)
    {
        $data = $this->service->binarySearch($request->nums, $request->target);
        return $this->jsonSuccess($data);
    }

}
