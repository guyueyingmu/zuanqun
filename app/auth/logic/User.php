<?php

namespace app\auth\logic;

use app\auth\base\Logic;

class User extends Logic
{

    public function select()
    {
        return $this->get('user')->getUserInfo();
    }

}
