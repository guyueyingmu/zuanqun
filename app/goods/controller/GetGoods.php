<?php

namespace app\goods\controller;
use app\goods\model\GetGoodsInfo;

class GetGoods
{

    public function goodsData()
    {
        return GetGoodsInfo::getAllData();
    }

}