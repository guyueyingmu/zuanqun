<?php

namespace app\logic\goods;

interface GoodsInterface
{

    //设置商品接口
    public function setService($alias, $service);

    //获取设置商品接口
    public function getService($alias);

    //设置
    public function setConfig();

    //统一查询入口
    public function select($alias);

}
