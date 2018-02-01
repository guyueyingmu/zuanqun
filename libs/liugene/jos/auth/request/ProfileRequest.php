<?php

// +----------------------------------------------------------------------
// |               配置类
// +----------------------------------------------------------------------

namespace liugene\jos\auth\request;

class ProfileRequest
{

    //API接口名称
    protected $_method;

    //采用OAuth授权方式为必填参数
    protected $_access_token;

    //应用的app_key
    protected $_app_key;

    //签名
    protected $_sign;

    //时间戳，格式为yyyy-MM-dd HH:mm:ss，例如：2011-06-16 13:23:30。京东API服务端允许客户端请求时间误差为6分钟
    protected $_timestamp;

    //暂时只支持json
    protected $_format = 'json';

    //API协议版本，可选值:2.0
    protected $_v = '2.0';

    //server API url
    protected $_server_url = 'https://api.jd.com/routerjson';

    //设置api接口名称
    public function set_method($method)
    {
        $this->_method = $method;
    }

    //设置access_token
    public function set_access_token($token)
    {
        $this->_access_token = $token;
    }

    //设置app key
    public function set_app_key($key)
    {
        $this->_app_key = $key;
    }

    //设置签名
    public function set_sign($sign)
    {
        $this->_sign = $sign;
    }

    //设置时间戳
    public function set_timestamp($time)
    {
        $this->_timestamp = $time;
    }

    //设置返回格式
    public function set_format($format)
    {
        $this->_format = $format;
    }

    //设置api协议版本
    public function set_v($v)
    {
        $this->_v = $v;
    }

    //////////////参数获取///////////////


    //获取api接口名称
    public function get_method()
    {
        return $this->_method;
    }

    //获取access_token
    public function get_access_token()
    {
        return $this->_access_token;
    }

    //获取app key
    public function get_app_key()
    {
        return $this->_app_key;
    }

    //获取签名
    public function get_sign()
    {
        return $this->_sign;
    }

    //获取时间戳
    public function get_timestamp()
    {
        return $this->_timestamp;
    }

    //获取返回格式
    public function get_format()
    {
        return $this->_format;
    }

    //获取api协议版本
    public function get_v()
    {
        return $this->_v;
    }

}