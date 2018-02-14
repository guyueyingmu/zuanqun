<?php

namespace app\console\logic;

use app\console\base\Logic;

class User extends Logic
{

    public function getUser()
    {
        return $this->get('user')->getUserInfo();
    }

    public function countUser()
    {
        return $this->get('user')->CountUser();
    }

}