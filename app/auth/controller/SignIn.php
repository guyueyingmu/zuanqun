<?php

namespace app\auth\controller;

use app\auth\container\Component;
use app\auth\container\Definition;
use app\auth\model\SignIn as SignInModel;
use app\auth\logic\SignIn as SignInLogic;
use liugene\linkrest\Restful;
use app\validate\center\Login;
use app\auth\center\Auth;

class SignIn
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('sign')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $sign = new SignInLogic();
                    $sign->set('sign',function(){
                        return new SignInModel();
                    });
                    $sign->set('regValidate',function(){
                        return new Login();
                    });
                    $sign->set('auth',function(){
                        return new Auth();
                    });
                    return $sign;
                })
            );
    }

    public function login()
    {
        $data = Component::getInstance()->get('sign')->handle();
        Restful::request()
            ->setData(['code' => 1, 'msg' => $data])
            ->send();
    }

}
