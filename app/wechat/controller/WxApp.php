<?php

namespace app\wechat\controller;
use think\Controller;

class WxApp extends Controller
{

    public function index()
    {
        return $this->fetch('default/wx_app/index');
    }

}
