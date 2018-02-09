<?php

namespace app\auth\controller;

use auth\container\Component;
use auth\container\Definition;
use auth\model\User as UserModel;
use auth\logic\User as UserLogic;

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
