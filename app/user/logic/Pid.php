<?php

namespace app\user\logic;

use app\user\base\Logic;

class Pid extends Logic
{

    public function put()
    {
        $data['pid'] = input('pid');
        $data['ad_name'] = input('ad');
        $data['zq_user_id'] = 11;
        $data['posttime'] = time();
        return $this->get('pid')->addPidInfo($data);
    }

}
