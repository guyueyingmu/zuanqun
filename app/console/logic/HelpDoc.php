<?php

namespace app\console\logic;
use app\console\base\Doc;

class HelpDoc extends  Doc
{

    public function select()
    {
        return $this->get('help')->getDoc();
    }

    public function put()
    {
        $data['uid'] = 1;
        $data['cid'] = input('cat');
        $data['help_title'] = input('title');
        $data['s_content'] = input('apidoc');
        $data['posttime'] = time();
        return $this->get('help')->addDoc($data);
    }

    public function delete()
    {
        // TODO: Implement delete method.
    }

    public function edit()
    {
        // TODO: Implement edit method.
    }

}