<?php

namespace app\user\model;

use think\Db;

class Channel
{

    public function addChannelInfo($data)
    {
        return Db::table('zq_channel')->insert($data);
    }

}
