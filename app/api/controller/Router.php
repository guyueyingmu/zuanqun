<?php

namespace app\api\controller;
use liugene\auth\Auth2;

class Router
{

    public function rest()
    {
        $auth = new Auth2();
        if($auth->verify($_REQUEST) === 0){
            return $auth->request();
        }
        return ['code' => 10000, 'msg' => '验证失败'];
    }

}
