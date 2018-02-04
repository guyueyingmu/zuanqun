<?php

namespace app\user\logic;

use app\user\base\Logic;

class User extends Logic
{

    public function getUser()
    {
        return $this->get('user')->getUserInfo(11);
    }

}