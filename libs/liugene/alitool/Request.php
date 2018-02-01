<?php

namespace liugene\alitool;
use liugene\curl\Curl;

class Request
{

    static public function get($url)
    {
        return Curl::request('get',$url);
    }

}