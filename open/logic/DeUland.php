<?php

namespace open\logic;

use open\base\Logic;

class DeUland extends Logic
{

    public function deUland()
    {
        dump($this->get('utilConfig')
            ->get('alitool')
            ->getService('deuland')
            ->getE('123'));
        dump($this->get('util')
            ->get('alitool')->select('deuland'));
    }

}