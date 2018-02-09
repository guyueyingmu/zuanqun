<?php

namespace open\logic;

use open\base\Logic;

class Create extends Logic
{

    public function put()
    {
        $rand = rand(10000,99999);
        $date = time();
        $app_id = ceil($date/$rand*10000+input('phone')/1000);
        $data['web_name'] = input('web_name');
        $data['web_domain'] = input('domain');
        $data['beian'] = input('beian');
        $data['web_info'] = input('web_info');
        $data['zq_uid'] = 11;
        $data['open_id'] = 1;
        $data['app_id'] = $app_id;
        $data['posttime'] = time();
        return $this->get('create')->createWebInfo($data,$this->get('app_key'));
    }

    public function select()
    {
        return $this->get('create')->getApplication();
    }

    public function countApplication()
    {
        return $this->get('create')->getApplicationCount();
    }

    public function getApplicationKey($app_id)
    {
        return $this->get('create')->getApplicationKeyByAppId($app_id);
    }

}
