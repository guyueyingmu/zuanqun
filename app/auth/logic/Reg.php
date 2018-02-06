<?php

namespace app\auth\logic;

use app\auth\base\Logic;

class Reg extends Logic
{

    public function put()
    {
        $verify = $this->verifyInput();
        if(!$verify['code']){
            return $verify['msg'];
        }
        $rand = rand(10000,99999);
        $date = time();
        $data['z_username'] = 'zq_' . ceil($date/$rand*100+input('phone')/10000);
        $data['z_mobile'] = input('phone');
        $data['z_password'] = md5(md5(input('password')));
        $data['reg_time'] = $date;
        return $this->get('reg')->regData($data,$this->get('webkey'));
    }

    private function verify($code,$phone)
    {
        return $this->get('sendVerify')->verify($code,$phone);
    }

    private function verifyInput()
    {
        if(!$this->verify(input('verify'),input('phone'))){
            return ['code' => false, 'msg' => '验证码错误'];
        }
        return ['code' => true, 'msg' => '验证通过'];
    }

}
