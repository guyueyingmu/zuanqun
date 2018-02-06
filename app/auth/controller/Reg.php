<?php

namespace app\auth\controller;

use app\auth\container\Component;
use app\auth\container\Definition;
use app\auth\model\Reg as RegModel;
use app\auth\logic\Reg as RegLogic;
use liugene\linkrest\Restful;


class Reg
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('reg')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $app = new RegLogic();
                    $app->set('reg',function(){
                        return new RegModel();
                    });
                    $app->set('webkey',function(){
                        return new WebKey();
                    });
                    $app->set('sendVerify',function(){
                        return new Send();
                    });
                    return $app;
                })
            );
    }

    //注册操作
    public function register()
    {
        $data = Component::getInstance()->get('reg')->put();
        Restful::request()
            ->setData(['code' => 1, 'msg' => $data])
            ->send();
    }

}
