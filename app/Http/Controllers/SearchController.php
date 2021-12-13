<?php

namespace App\Http\Controllers;


use App\Services\binarySearch;
use Illuminate\Http\Request;

class SearchController extends Controller
{


    protected $service;

    public function __construct()
    {
        $this->service = app(binarySearch::class);
    }

    public function binarySearch(Request $request)
    {
        $data = $this->service->binarySearch($request->nums, $request->target);
        return $this->jsonSuccess($data);
    }

}
