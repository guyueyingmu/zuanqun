<?php

namespace app\console\logic;

use app\console\base\Logic;

class Verify extends Logic
{

    public function getVerify()
    {
        return $this->get('verify')->getVerifyInfo();
    }

    public function countVerify()
    {
        return $this->get('verify')->countVerify();
    }

}