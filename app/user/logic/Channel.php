<?php

namespace app\user\logic;

use app\auth\base\Logic;

class Channel extends Logic
{

    public function put()
    {
        $data[''] = input('');
        $data[''] = input('');
        $data[''] = input('');
        $data[''] = input('');
        return $this->get('channel')->addChannelInfo($data);
    }

}
