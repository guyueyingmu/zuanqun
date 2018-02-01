<?php

namespace app\goods\model;
use think\Db;

class GetGoodsInfo
{

    static public function getAllData()
    {
        return Db::table('zq_goods')->paginate(10,false,[
            'type' => 'bootstrap5',
        ]);
    }

}
