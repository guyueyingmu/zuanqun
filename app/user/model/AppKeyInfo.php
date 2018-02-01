<?php

namespace app\user\model;
use think\Db;
use think\Exception;

class AppKeyInfo
{

    //获取用户appkey信息
    public function getUserAppKey($id)
    {
        return Db::table('zq_appkey')->where(['zq_user_id' => $id])->value('app_key');
    }

}
