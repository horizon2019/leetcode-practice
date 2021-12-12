<?php

use App\Http\Controllers\Controller;
use App\Services\TreeServices;
use Illuminate\Http\Request;

class SumController extends Controller
{
    /**
     * @var TreeServices
     */
    protected $service;

    public function __construct()
    {

        $this->service = new TwoSumServices();

    }

    public function twoSum()
    {

        $data = $this->service->twoSum();
        return $this->jsonSuccess($data);


    }
}
