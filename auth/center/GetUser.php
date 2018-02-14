<?php

namespace auth\center;

use auth\container\Component;
use auth\container\Definition;

class GetUser
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

    public function get()
    {
        if(isset($_COOKIE['token'])){
            $user = Component::getInstance()->get('authVerify')->parse($_COOKIE['token']);
            return json_decode($user['payload'],true);
        }
    }

}