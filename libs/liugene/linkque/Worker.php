<?php

namespace liugene\linkque;

class Worker
{

    static private $_worker;

    static public function getInstance()
    {
        if(is_null(self::$_worker)){
            self::$_worker = new self();
        }
        return self::$_worker;
    }

    public function pop($job,$sleep = 3, $maxTries = 0){}

}
