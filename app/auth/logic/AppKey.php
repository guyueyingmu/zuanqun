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

}
