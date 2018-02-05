<?php

namespace app\auth\controller;

use app\auth\container\Component;
use app\auth\container\Definition;
use app\auth\model\User as UserModel;
use app\auth\logic\User as UserLogic;

class User
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('user')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $team = new UserLogic();
                    $team->set('user',function(){
                        return new UserModel();
                    });
                    return $team;
                })
            );
    }

    public function getUser()
    {
        return Component::getInstance()->get('user')->select();
    }

}
