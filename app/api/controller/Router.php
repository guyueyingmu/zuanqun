<?php

namespace app\api\controller;

use api\container\Component;
use api\container\Definition;
use api\model\Router as RouterModel;
use api\logic\Router as RouterLogic;
use liugene\linkrest\Restful;
use liugene\zqsdk\Zq;

class Router
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('create')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $router = new RouterLogic();
                    $router->set('create',function(){
                        return new RouterModel();
                    });
                    return $router;
                })
            );
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('auth2')
                ->setIsSingleton(true)
                ->setClassName('liugene\auth\Auth2')
            );
    }

    public function index()
    {
        Zq::getInstance()
            ->setAppKey('zq151798590')
            ->setAppSecret('ODAyZjRlYmVlYjdlYjAyNmNjODcyMDk2ZWIyYTcyMzUyMWY4NWNiZg')
            ->setTimestamp('123')
            ->setService('ZqGoodsGetService')->setMethod('ZqGoodsGet');
        dump(Zq::getInstance()->execute());
    }

    public function rest()
    {
        $auth = Component::getInstance()->get('auth2');
        if($auth->verify(input()) === 0){
            Restful::request()
                ->setData(['code' => 'OK', 'request' => ['msg' => 'request success!', 'data' => $auth->request()]])
                ->send();
        }
        Restful::request()
            ->setData(['code' => 'false', 'request' => ['code' => 10000, 'msg' => '验证失败']])
            ->send();
    }

}
