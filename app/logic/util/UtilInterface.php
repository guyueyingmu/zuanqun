<?php

namespace app\logic\util;

interface UtilInterface
{
    //设置工具接口
    public function setService($alias, $service);

    //获取设置工具接口
    public function getService($alias);

    //设置
    public function setConfig();

    //统一查询入口
    public function select($alias);
}
