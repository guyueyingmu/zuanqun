<?php

namespace liugene\linkque;

class Queue
{

    static private $_connect;

    static public function getInstance()
    {
        if(is_null(self::$_connect)){
            $config = require_once  __DIR__ .'/config.php';
            $class = '\\liugene\\linkque\\queue\\connect\\Sync';
            self::$_connect = new $class($config);
            return self::$_connect;
        }
        return self::$_connect;
    }

    private function getConnect($name, $arguments)
    {
        if(is_null(self::$_connect)){
            $class = '\\liugene\\linkque\\queue\\connect\\Sync';
            self::$_connect = new $class();
            return self::$_connect->$name($arguments[0]);
        }
        return self::$_connect;
    }

    public function __call($name, $arguments)
    {
        return call_user_func_array([__CLASS__,'getConnect'],[$name,$arguments]);
    }

    static public function __callStatic($name, $arguments)
    {
        return call_user_func_array([__CLASS__,'getConnect'],[$name,$arguments]);
    }

}
