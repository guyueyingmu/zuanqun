<?php

namespace app\auth\controller;

use app\auth\container\Component;
use app\auth\container\Definition;
use app\auth\model\Reg as RegModel;
use app\auth\logic\Reg as RegLogic;
use liugene\linkrest\Restful;
use app\validate\center\Register;


class Reg
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('reg')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $reg = new RegLogic();
                    $reg->set('reg',function(){
                        return new RegModel();
                    });
                    $reg->set('webkey',function(){
                        return new WebKey();
                    });
                    $reg->set('sendVerify',function(){
                        return new Send();
                    });
                    $reg->set('regValidate',function(){
                        return new Register();
                    });
                    return $reg;
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
