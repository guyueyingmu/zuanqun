<?php

namespace auth\model;

use think\Db;

class WebKey
{

    public function createWebKey($data)
    {
        return Db::table('zq_web_key')->insert($data);
    }

}
