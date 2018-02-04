<?php

namespace liugene\linkque;

class Job
{

    static private $_job;

    private function getJob($name, $arguments)
    {
        $class = '\\liugene\\linkque\\queue\\job\\Sync';
        self::$_job = new $class();
        return self::$_job->$name($arguments[0]);
    }

    public function __call($name, $arguments)
    {
        return call_user_func_array([__CLASS__,'getJob'],[$name,$arguments]);
    }

}