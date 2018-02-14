<?php

namespace app\console\logic;

use app\console\base\Logic;

class Open extends Logic
{

    public function getApp()
    {
        return $this->get('open')->getAppInfo();
    }

    public function countApp()
    {
        return $this->get('open')->getCountApp();
    }

    public function getUser()
    {
        return $this->get('open')->getUserInfo();
    }

    public function countUser()
    {
        return $this->get('open')->getCountUser();
    }

}