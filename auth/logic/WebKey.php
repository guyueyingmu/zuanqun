<?php

namespace auth\logic;

use auth\base\Logic;

class WebKey extends Logic
{

    public function create($use_id)
    {
        $data['app_id'] = $this->createAppId();
        $data['zq_user_id'] = $use_id;
        $data['app_key'] = $this->createSign($data['app_id']);
        $data['posttime'] = time();
        return $this->get('web')->createWebKey($data);
    }

    private function createAppId()
    {
        $rand = rand(1000,9999);
        $date = time();
        return ceil($date/$rand*1000+input('phone')/10000);
    }

    private function createSign($app_id)
    {
        return sha1('www.zuanqun.cn.2018.02.06' . $app_id);
    }

}
