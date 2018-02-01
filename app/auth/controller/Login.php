<?php

namespace app\auth\controller;
use app\auth\model\UserInfo;
use think\Loader;
use think\Config;

class Login
{
    //登入页面
    public function index()
    {
        return view('default/login/login');
    }

    //登入操作
    public function login()
    {
        if($res = UserInfo::chickLogin(input())){
            if($res['z_password'] == md5(md5(input('password')))){
                $token = Loader::controller('app\auth\center\Auth')->sign($res,Config::get('jwt.key'));
                return ['code' => 1, 'msg' => '登入成功','token' => $token];
            }
            return ['code' => 2, 'msg' => '登入失败'];
        } else {
            return ['code' => 2, 'msg' => '登入失败'];
        }
    }
}