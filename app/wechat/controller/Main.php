<?php

namespace app\wechat\controller;
use think\Controller;

class Main extends Controller
{

    public function index()
    {
        return $this->fetch('default/index/index');
    }

}