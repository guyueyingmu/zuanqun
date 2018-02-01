<?php

namespace liugene\wechat\service;

class WxServerIpGetService implements ServiceInterface
{

    private $api_url = 'https://api.weixin.qq.com/cgi-bin/getcallbackip';

    private $access_token;

    private $api_param = [];

    //获取api_param
    public function set_api_url($url)
    {
        $this->api_url = $url;
        return $this;
    }

    public function set_access_token($token)
    {
        $this->access_token = $token;
        $this->api_param['access_token'] = $token;
        return $this;
    }

    public function get_api_url()
    {
        return $this->api_url;
    }

    public function get_api_param()
    {
        return $this->api_param;
    }

}
