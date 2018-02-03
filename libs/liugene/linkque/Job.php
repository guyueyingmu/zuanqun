<?php

namespace liugene\linkque;

class Job
{

    static private $_job;

    static public function getInstance()
    {
        if(is_null(self::$_job)){
            $class = '\\liugene\\linkque\\queue\\job\\Sync';
            self::$_job = new $class();
            return self::$_job;
        }
        return self::$_job;
    }

    private function getJob($name, $arguments)
    {
        if(is_null(self::$_job)){
            $class = '\\liugene\\linkque\\queue\\job\\Sync';
            self::$_job = new $class();
            return self::$_job->$name($arguments[0]);
        }
        return self::$_job;
    }

    public function __call($name, $arguments)
    {
        return call_user_func_array([__CLASS__,'getJob'],[$name,$arguments]);
    }

}