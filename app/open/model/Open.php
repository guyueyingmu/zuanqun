<?php

namespace app\open\model;

use think\Db;

class Open
{

    public function createOpenInfo($data)
    {
        return Db::table('zq_open')->insert($data);
    }

    public function getOpenInfo()
    {
        return Db::table('zq_open')->where('id = 1')->find();
    }

}