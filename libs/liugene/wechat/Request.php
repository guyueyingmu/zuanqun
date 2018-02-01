<?php

namespace liugene\wechat;
use liugene\curl\Curl;

class Request
{

    public function get($url)
    {
        return Curl::request('get',$url);
    }

}
