<?php

namespace app\console\controller;

use app\console\container\Component;
use app\console\container\Definition;
use app\console\model\Collect as CollectModel;
use app\console\logic\Collect as CollectLogic;
use app\logic\Goods;
use app\logic\goods\Alimama;
use app\logic\goods\tbk\ItemGet;
use app\logic\goods\tbk\FavoriteItemGet;
use app\logic\goods\tbk\EventItemGet;
use liugene\linkrest\Restful;

class Collect
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('collect')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $collect = new CollectLogic();
                    $collect->set('collect',function(){
                        return new CollectModel();
                    });
                    $collect->set('goodsCollect',function(){
                        $goods = Goods::getInstance();
                        $service = $goods->set('tbk',new Alimama());
                        $service->setService('ItemGet',new ItemGet);
                        $service->setService('favorite',new FavoriteItemGet);
                        $service->setService('event',new EventItemGet);
                        return $goods;
                    });
                    $collect->set('goods',function(){
                        return Goods::getInstance();
                    });
                    return $collect;
                })
            );
    }

    public function collect()
    {
        $data = Component::getInstance()->get('collect')->collectGoods();
        Restful::request()
            ->setData(['code' => 1, 'msg' => $data])
            ->send();
    }

    public function collectByCat()
    {
        $data = Component::getInstance()->get('collect')->collectGoodsByCat();
        Restful::request()
            ->setData(['code' => 1, 'msg' => $data])
            ->send();
    }

    public function collectByFavorite()
    {
        $data = Component::getInstance()->get('collect')->collectByFavorite();
        Restful::request()
            ->setData(['code' => 1, 'msg' => $data])
            ->send();
    }

    public function collectByEvent()
    {
        $data = Component::getInstance()->get('collect')->collectByEvent();
        Restful::request()
            ->setData(['code' => 1, 'msg' => $data])
            ->send();
    }

}