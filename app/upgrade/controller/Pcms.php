<?php

namespace app\upgrade\controller;
use think\Loader;

class Pcms
{

    public function index()
    {
        return view('zq_cms_1/index/zq_cms_1',[
            'list' => Loader::controller('app\goods\controller\GetGoods')->goodsData()
        ]);
    }

    public function items()
    {
        return view('zq_cms_1/items/items');
    }

}