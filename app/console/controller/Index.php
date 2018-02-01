<?php

// +----------------------------------------------------------------------
// |               配置类
// +----------------------------------------------------------------------

namespace app\console\controller;
use think\Controller;

class Index extends Controller
{

    public function index()
    {
        return $this->fetch('default/index/index');
    }

    //管理首页欢迎页面
    public function welcome()
    {
        return $this->fetch('default/index/welcome');
    }

}
