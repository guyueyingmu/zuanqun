<?php

namespace app\auth\controller;

use app\auth\container\Component;
use app\auth\container\Definition;
use app\auth\model\SignIn as SignInModel;
use app\auth\logic\SignIn as SignInLogic;
use liugene\linkrest\Restful;

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
                    return $sign;
                })
            );
    }

}
