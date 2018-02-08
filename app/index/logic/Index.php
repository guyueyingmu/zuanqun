<?php

namespace app\index\logic;

use app\index\base\Logic;

class Index extends Logic
{

    public function getNewHelp()
    {
        return $this->get('index')->getNewHelpInfo();
    }

    public function getNewNotice()
    {
        return $this->get('index')->getNewNoticeInfo();
    }

    public function getNewApi()
    {
        return $this->get('index')->getNewApiInfo();
    }

}
