<?php

namespace app\auth\logic;

use app\auth\base\Logic;

class Send extends Logic
{

    public function handle()
    {
        $code = rand(100000,999999);
        $phone = input('phone');
        $data['code'] = $code;
        $data['mobile'] = $phone;
        $data['posttime'] = time();
        if($this->get('send')->appendCode($data)){
            if($this->get('sender')->sender('Sms')->verify($code,$phone)){
                return '发送成功';
            }
            return '发送失败';
        }
        return '发送失败';
    }

    public function verify($code,$phone)
    {
        $res = $this->get('send')->getCode($phone);
        if(empty($res)){
            return false;
        }
        if($res['posttime'] > time()+180){
            return false;
        }
        if($res['is_verify'] == 1){
            return false;
        }
        if($res['code'] != $code){
            return false;
        }
        return true;
    }

}
