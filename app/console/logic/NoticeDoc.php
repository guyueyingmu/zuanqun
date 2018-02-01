<?php

namespace app\console\logic;
use app\console\base\Doc;

class NoticeDoc extends Doc
{

    public function select()
    {
        return $this->get('notice')->getDoc();
    }

    public function put()
    {
        $data['uid'] = 1;
        $data['cid'] = input('cat');
        $data['notice_title'] = input('title');
        $data['s_content'] = input('apidoc');
        $data['posttime'] = time();
        return $this->get('notice')->addDoc($data);
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
