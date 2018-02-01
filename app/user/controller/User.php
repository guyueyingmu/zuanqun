<?php

namespace app\user\controller;
use think\Loader;

class User
{
    public function index()
    {
//        dump($_COOKIE);die;
        if(Loader::controller('app\auth\center\Check')->isLogin()){
            return view('default/user/index');
        } else {
            return redirect('auth/login/index');
        }
    }
}