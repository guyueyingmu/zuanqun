<?php

namespace app\logic;

class Send
{

    static private $_instance;

    static private $_sender;

    static public function getInstance()
    {
        if(is_null(self::$_instance)){
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function getSender($name)
    {
        if(is_null(self::$_sender)){
            $class = '\\app\\logic\\send\\sender\\' . ucfirst($name);
            self::$_sender = new $class();
            return self::$_sender;
        }
        return self::$_sender;
    }

    public function sender($sender)
    {
        return $this->getSender($sender);
    }


}