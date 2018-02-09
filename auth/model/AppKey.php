<?php

namespace auth\model;

use think\Db;

class AppKey
{

    public function addAppKey($data)
    {
        return Db::table('zq_appkey')->insert($data);
    }

}
