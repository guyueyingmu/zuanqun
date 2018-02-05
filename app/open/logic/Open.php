<?php

namespace app\open\logic;

use app\open\base\Logic;

class Open extends Logic
{

    public function put()
    {
        $data['name'] = input('open_name');
        $data['mobile'] = input('open_chat');
        $data['zq_uid'] = 11;
        $data['reg_time'] = time();
        return $this->get('open')->createOpenInfo($data);
    }

    public function select()
    {
        return $this->get('open')->getOpenInfo();
    }

}
