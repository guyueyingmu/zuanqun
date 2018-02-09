<?php

// +----------------------------------------------------------------------
// | 淘宝客商品查询
// +----------------------------------------------------------------------

namespace app\hot\controller;

use app\hot\container\Component;
use app\hot\container\Definition;

class Index
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('goods')
                ->setIsSingleton(true)
                ->setClassName('app\goods\server\GetGoods')
            );
    }

    public function index()
    {
        $goods = Component::getInstance()->get('goods');
        return view('default/index/index',[
            'list' => $goods->getGoods(),
            'cat' => $goods->getGoodsCat(),
            'count' => $goods->countGoods(),
        ]);
    }
}
