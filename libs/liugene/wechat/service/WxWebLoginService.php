<?php

namespace liugene\wechat\service;

class WxWebLoginService implements ServiceInterface
{

    //公众号的唯一标识
    private $appid;

    //公众号的appsecret
    private $secret;

    //填写第一步获取的code参数
    private $code;

    //填写为authorization_code
    private $grant_type;

    private $api_url = 'https://api.weixin.qq.com/sns/oauth2/access_token';


    private $api_param = [];

    /////////////////////设置服务参数/////////////////////////

    public function set_appid($appid)
    {
        $this->appid = $appid;
        $this->api_param['appid'] = $appid;
        return $this;
    }

    public function set_secret($secret)
    {
        $this->secret = $secret;
        $this->api_param['secret'] = $secret;
        return $this;
    }

    public function set_code($code)
    {
        $this->code = $code;
        $this->api_param['code'] = $code;
        return $this;
    }

    public function set_grant_type($type)
    {
        $this->grant_type = $type;
        $this->api_param['grant_type'] = $type;
        return $this;
    }

    public function set_api_url($url)
    {
        $this->api_url = $url;
        return $this;
    }

    /////////////////////////获取服务参数////////////////////////

    public function get_appid()
    {
        return $this->appid;
    }

    public function get_secret()
    {
        return $this->secret;
    }

    public function get_code()
    {
        return $this->code;
    }

    public function get_grant_type()
    {
        return $this->grant_type;
    }

    public function get_api_url()
    {
        return $this->api_url;
    }


    ////////////////////////////

    //服务参数
    public function get_api_param()
    {
        return $this->api_param;
    }
}
