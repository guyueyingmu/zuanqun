<?php

namespace app\user\logic;

use app\user\base\Logic;

class Cms extends Logic
{

    public function select()
    {
        return $this->get('cms')->getCmsInfo();
    }

    public function put()
    {
        $data['website'] = input('web_title');
        $data['domain'] = input('web_domain');
        $data['beian'] = input('beian');
        $data['zq_uid'] = 11;
        $data['posttime'] = time();
        return $this->get('cms')->addCmsInfo($data);
    }

}
