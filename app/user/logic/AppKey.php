<?php

namespace app\user\logic;
use app\user\base\Logic;

class AppKey extends Logic
{

    public function getAppKeyInfo()
    {
        return $this->get('appkey')->getUserAppKey(22);
    }

}