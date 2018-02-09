<?php

namespace auth\logic;

use auth\base\Logic;
use think\Config;

class SignIn extends Logic
{

    public function handle()
    {
        $verify = $this->verifyInput();
        if(!$verify['code']){
            return $verify['msg'];
        }
        if($res = $this->get('sign')->chickLogin(input())){
            if($res['z_password'] == md5(md5(input('password')))){
                $token = $this->get('auth')->sign($res,Config::get('jwt.key'));
                return ['code' => 1, 'msg' => '登入成功','token' => $token];
            }
            return ['code' => 2, 'msg' => '登入失败'];
        } else {
            return ['code' => 2, 'msg' => '登入失败'];
        }
    }

    private function verifyInput()
    {
        $validate = $this->get('regValidate');
        if(!$validate->check(input())){
            return ['code' => false, 'msg' => $validate->getError()];
        }
        return ['code' => true, 'msg' => '验证通过'];
    }

}
