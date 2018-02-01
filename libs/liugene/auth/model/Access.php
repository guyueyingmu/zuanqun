<?php

namespace liugene\auth\model;
use think\Db;

class Access
{
    static public function getAppSecret($key)
    {
        return Db::table('zq_appkey')->where(['app_key' => $key])->value('app_secret');
    }
}
