<?php

namespace app\index\logic;

use app\index\base\Logic;

class Help extends Logic
{

    public function getHelpTitle()
    {
        return $this->get('help')->getTitle();
    }

    public function getHelpView()
    {
        if(is_null(input('cid'))){
            $cid = 4;
        } else {
            $cid = input('cid');
        }
        return $this->get('help')->getView($cid);

    }

    public function getHelpItem()
    {
        return $this->get('help')->getHelpItemInfo(input('id'));
    }

}