<?php

namespace app\user\controller;

class ResetInfo
{

    //基本信息页面
    public function index()
    {
        return view('default/reset/reset');
    }

    //重置密码页面
    public function password()
    {
        return view('default/reset/password');
    }

    //重置手机号
    public function mobile()
    {
        return view('default/reset/mobile');
    }

}