<?php

namespace app\user\model;

use think\Db;

class Pid
{

    public function addPidInfo($data)
    {
        return Db::table('zq_alimama')->insert($data);
    }

}
