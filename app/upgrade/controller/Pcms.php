<?php

namespace app\upgrade\controller;
use think\Loader;

class Pcms
{

    public function index($url)
    {
        return view('zq_cms_1/index/zq_cms_1',[
            'list' => Loader::controller('app\goods\server\GetGoods')->getGoods($url),
            'url'  => $url,
        ]);
    }

    public function items()
    {
        return view('zq_cms_1/items/items');
    }

}