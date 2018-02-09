<?php

namespace auth\center;
use think\Loader;
use think\Config;

class Check
{

    public function isLogin()
    {
        if(isset($_COOKIE['token'])){
            return Loader::action('auth/auth/verify',[$_COOKIE['token'],Config::get('jwt.key')],'center');
        }
        return false;
    }

}