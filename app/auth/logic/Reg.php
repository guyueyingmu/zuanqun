<?php

namespace app\auth\logic;

use app\auth\base\Logic;

class Reg extends Logic
{

    public function put()
    {
        $rand = rand(10000,99999);
        $date = time();
        $data['z_username'] = 'zq_' . ceil($date/$rand*100+input('phone')/10000);
        $data['z_mobile'] = input('phone');
        $data['z_password'] = md5(md5(input('password')));
        $data['reg_time'] = $date;
        return $this->get('reg')->regData($data);
    }

}
