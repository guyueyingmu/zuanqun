<?php

namespace app\user\model;
use think\Db;
use think\Exception;

class AppKey
{

    //获取用户appkey信息
    public function getUserAppKey($id)
    {
        return Db::table('zq_web_key')->field('app_key,app_id')->where(['zq_user_id' => $id])->find();
    }

}
