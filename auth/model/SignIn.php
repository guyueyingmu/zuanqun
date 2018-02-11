<?php

namespace auth\model;

use think\Db;
use think\Exception;

class SignIn
{

    //验证登入信息
    public function chickLogin($param)
    {
        try{
            return Db::table('zq_user')->where(['z_mobile' => $param['phone']])->find();
        } catch (Exception $e) {
            return false;
        }
    }

}
