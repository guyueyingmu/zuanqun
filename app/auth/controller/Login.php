<?php

namespace app\auth\controller;

class Login
{
    //登入页面
    public function index()
    {
        return view('default/login/login');
    }
}