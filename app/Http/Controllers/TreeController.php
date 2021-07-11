<?php

namespace App\Http\Controllers;


use App\Services\TreeServices;
use Illuminate\Http\Request;


class TreeController extends Controller
{
    /**
     * @var TreeServices
     */
    protected $service;

    public function __construct()
    {

        $this->service = new TreeServices();

    }

    public function reConstructBinaryTree(Request $request)
    {
        $pre = $request->pre;
        $vin = $request->vin;

        $data = $this->service->reConstructBinaryTree($pre, $vin);
        return $this->jsonSuccess($data);

    }


    public function hasSubtree(Request $request)
    {
        $child = $request->treeChild;
        $parent = $request->treeParent;

        $data = $this->service->hasSubtree($child, $parent);
        return $this->jsonSuccess($data);
    }


    public function mirror(Request $request)
    {

        $tree = $request->tree;
        $data = $this->service->mirror($tree);
        return $this->jsonSuccess($data);
    }


    public function verfiySquenceOfBst(Request $request)
    {
        $tree = $request->tree;
        $data = $this->service->verifySquenceOfBst($tree);
        return $this->jsonSuccess($data);
    }

}
