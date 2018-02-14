<?php

namespace auth\center;
use liugene\jwt\Jwt;

class Auth
{

    //登入成功进行签名
    public function sign($payload=[],$key)
    {
        return Jwt::sign($payload,$key);
    }

    //验证签名正确性
    public function verify($data,$key)
    {
        return Jwt::verify(Jwt::parse($data),$key);
    }

    public function parse($data)
    {
        return Jwt::parse($data);
    }

}