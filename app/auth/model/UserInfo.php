<?php

namespace app\auth\model;
use think\Db;
use think\Exception;

class UserInfo
{

    //验证登入信息
    static public function chickLogin($param)
    {
        try{
            return Db::table('zq_user')->where(['z_mobile' => $param['account']])->find();
        } catch (Exception $e) {
            return false;
        }
    }

}
