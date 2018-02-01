<?php

// +----------------------------------------------------------------------
// |               服务接口
// +----------------------------------------------------------------------

namespace zuanqun\util\service;

interface ServiceInterface
{
    //获取服务API参数
    public function get_api_params();

    //获取服务API方法
    public function get_api_method_name();
}
