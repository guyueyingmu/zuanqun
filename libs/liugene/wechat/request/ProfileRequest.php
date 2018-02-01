<?php

namespace liugene\wechat\request;

class ProfileRequest
{

    //微信appid
    private $appid;

    //微信secret
    private $secret;

    //请求地址
    private $access_url = 'https://api.weixin.qq.com/cgi-bin/token';

    //类型
    private $grant_type = 'client_credential';

    private $access_token;

    //保存获取的access_token时间
    private $time;

    //接收的数据
    private $post_xml;
    //判断是否已经校验过signature | bool
    private $isValid = false;

    ////////////////设置参数///////////////

    public function set_appid($appid)
    {
        $this->appid = $appid;
        return $this;
    }

    public function set_secret($secret)
    {
        $this->secret = $secret;
        return $this;
    }

    public function set_access_url($url)
    {
        $this->access_url = $url;
        return $this;
    }

    public function set_grant_type($type)
    {
        $this->grant_type = $type;
        return $this;
    }

    public function set_access_token($token)
    {
        $this->access_token = $token;
        return $this;
    }

    public function set_time($time)
    {
        $this->time = $time;
        return $this;
    }

    public function set_post_xml($post)
    {
        $this->post_xml = $post;
        return $this;
    }

    public function set_is_valid($boolen)
    {
        $this->isValid = $boolen;
        return $this;
    }



    ////////////////获取参数///////////////

    public function get_appid()
    {
        return $this->appid;
    }

    public function get_secret()
    {
        return $this->secret;
    }

    public function get_access_url()
    {
        return $this->access_url;
    }

    public function get_grant_type()
    {
        return $this->grant_type;
    }

    public function get_access_token()
    {
        return $this->access_token;
    }

    public function get_time()
    {
        return $this->time;
    }

    public function get_post_xml()
    {
        return $this->post_xml;
    }

    public function get_is_valid()
    {
        return $this->isValid;
    }

}
