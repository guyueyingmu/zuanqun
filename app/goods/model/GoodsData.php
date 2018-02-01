<?php

namespace app\goods\model;
use think\Db;

class GoodsData
{

    static public function tbk_goods($goods)
    {
        return Db::table('zq_goods')->insertAll($goods);
    }

}
