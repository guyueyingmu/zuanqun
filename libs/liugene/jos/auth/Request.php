<?php

// +----------------------------------------------------------------------
// |               api请求类
// +----------------------------------------------------------------------

namespace liugene\jos\auth;
use liugene\curl\Curl;

class Request
{
    public function get($url)
    {
        return Curl::request('get',$url);
    }
}
