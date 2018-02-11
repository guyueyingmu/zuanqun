<?php

namespace auth\center;

use auth\container\Component;
use auth\container\Definition;
use think\Config;

class Check
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('authVerify')
                ->setIsSingleton(true)
                ->setClassName('auth\center\Auth')
            );
    }

    public function isLogin()
    {
        if(isset($_COOKIE['token'])){
            return Component::getInstance()->get('authVerify')->verify($_COOKIE['token'],Config::get('jwt.key'));
        }
        return false;
    }

}