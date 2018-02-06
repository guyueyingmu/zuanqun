<?php

namespace app\api\controller;

use app\api\container\Component;
use app\api\container\Definition;
use app\api\model\Router as RouterModel;
use app\api\logic\Router as RouterLogic;
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
            ->setAppKey('zq9112694')
            ->setAppSecret('NDg5ZjQ0NDRhMDY0YTczMWY1YTliOTQwYWNhNzMxMWYxNzIzYmY2Yg')
            ->setTimestamp('123')
            ->setService('ZqGoodsGetService')->setMethod('ZqGoodsGet');
        dump(Zq::getInstance()->execute());
    }

    public function rest()
    {
        $auth = Component::getInstance()->get('auth2');
        if($auth->verify(input()) === 0){
            Restful::request()
                ->setData(['code' => 1, 'msg' => '', 'data' => $auth->request()])
                ->send();
        }
        Restful::request()
            ->setData(['code' => 1, 'msg' => ['code' => 10000, 'msg' => '验证失败']])
            ->send();
    }

}
