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
        $cms = $this->get('cms');
        if($cms->existsUser(11)){
            $data['website'] = input('web_title');
            $data['domain'] = input('web_domain');
            $data['beian'] = input('beian');
            $data['posttime'] = time();
            return $cms->editCmsInfo($data,11);
        } else {
            $data['website'] = input('web_title');
            $data['domain'] = input('web_domain');
            $data['beian'] = input('beian');
            $data['zq_uid'] = 11;
            $data['posttime'] = time();
            return $cms->addCmsInfo($data);
        }
    }

}
