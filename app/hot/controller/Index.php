<?php

// +----------------------------------------------------------------------
// | 淘宝客商品查询
// +----------------------------------------------------------------------

namespace app\hot\controller;
use think\Loader;

class Index
{
    public function index()
    {
        return view('default/index/index',[
            'list' => Loader::controller('app\goods\controller\GetGoods')->goodsData(),
        ]);
    }
}
