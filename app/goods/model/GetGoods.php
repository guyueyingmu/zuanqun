<?php

namespace app\goods\model;

use think\Db;

class GetGoods
{

    public function getGoodsInfo($where,$order,$path)
    {
        return Db::table('zq_goods')
            ->where($where)
            ->order($order)
            ->paginate(10,false,[
            'type' => 'bootstrap5',
                'path' => $path
        ]);
    }

    public function getGoodsCatsInfo()
    {
        return Db::table('zq_class')->where('pid = 7')->select();
    }

    public function countGoodsInfo()
    {
        return Db::table('zq_goods')->count('id');
    }

}
