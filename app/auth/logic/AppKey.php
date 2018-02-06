<?php

namespace app\auth\logic;

use app\auth\base\Logic;

class AppKey extends Logic
{

    public function create($uid,$app_id,$secret)
    {
        $rand = rand(10000,99999);
        $date = time();
        $app_key = 'zq' . ceil($date/$rand*100+input('phone')/10000);
        $data['app_secret'] = $secret;
        $data['app_key'] = $app_key;
        $data['app_id'] = $app_id;
        $data['zq_user_id'] = $uid;
        $data['posttime'] = $date;
        return $this->get('app')->addAppKey($data);
    }

    public function resetSecret()
    {
        $rand = rand(100000,999999);
        $date = time();
        $phone = 13879337614;
        $secret = base64_encode(hash_hmac('sha1', $rand . $phone, $date));
        $str = substr($secret,0,-2);
        return $str;
    }

}
