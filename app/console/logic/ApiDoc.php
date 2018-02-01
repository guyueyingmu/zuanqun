<?php

namespace app\console\logic;
use app\console\base\Doc;

class ApiDoc extends  Doc
{

    public function select()
    {
        return $this->get('api')->getDoc();
    }

    public function put()
    {
        $data['uid'] = 1;
        $data['cid'] = input('cat');
        $data['api_title'] = input('title');
        $data['s_content'] = input('apidoc');
        $data['posttime'] = time();
        return $this->get('api')->addDoc($data);
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
