<?php

namespace open\logic;

use open\base\Logic;

class ToUland extends Logic
{

    public function toUland()
    {
        dump($this->get('utilConfig')
            ->get('alitool')
            ->getService('touland')
            ->getActivityId('123')
            ->getPid('mm_2323_93232_3233')
            ->getItemId('35435353344'));
        dump($this->get('util')
            ->get('alitool')->select('touland'));
    }

}