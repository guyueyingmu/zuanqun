<?php

namespace zuanqun\auth;
use liugene\curl\Curl;

class Request
{
    public function get($url)
    {
        return Curl::request('get',$url);
    }
}