<?php

namespace app\console\model;

use think\Db;

class Collect
{
    public function goodsInto($goods)
    {
        return Db::table('zq_goods')->insertAll($goods);
    }
}