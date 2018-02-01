<?php

namespace app\auth\controller;
use app\auth\model\RegUserInfo;
use think\Session;

class Register
{

    //注册页面
    public function index()
    {
        return view('default/register/register');
    }

    //注册操作
    public function register()
    {
        $date = time();
        $data['z_username'] = 'zuanqun_' . $date;
        $data['z_mobile'] = input('phone');
        $data['z_password'] = md5(md5(input('password')));
        $data['reg_time'] = $date;
        if($res = RegUserInfo::regData($data)){
            Session::set('uid',$res);
            return ['code' => 1, 'msg' => '注册成功'];
        } else {
            return ['code' => 2, 'msg' => '注册失败'];
        }
    }
}