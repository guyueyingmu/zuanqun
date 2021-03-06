<?php

namespace app\goods\server;

use app\goods\container\Component;
use app\goods\container\Definition;
use app\goods\model\GetGoods as GetGoodsModel;
use app\goods\logic\GetGoods as GetGoodsLogic;

class GetGoods
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('getGoods')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $getGoods = new GetGoodsLogic();
                    $getGoods->set('getGoods',function(){
                        return new GetGoodsModel();
                    });
                    return $getGoods;
                })
            );
    }

    public function getGoods($url = null)
    {
        return Component::getInstance()->get('getGoods')->getGoods($url);
    }

    public function getGoodsCat()
    {
        return Component::getInstance()->get('getGoods')->getGoodsCats();
    }

    public function countGoods()
    {
        return Component::getInstance()->get('getGoods')->countGoods();
    }

}