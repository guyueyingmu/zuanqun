<?php

namespace auth\logic;

use auth\base\Logic;

class User extends Logic
{

    public function select()
    {
        return $this->get('user')->getUserInfo();
    }

}
