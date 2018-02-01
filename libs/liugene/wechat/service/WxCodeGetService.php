<?php

namespace liugene\wechat\service;

class WxCodeGetService implements ServiceInterface
{

    private $appid;

    private $redirect_uri;

    //code
    private $response_type = 'code';

    //scope参数中的snsapi_base和snsapi_userinfo
    private $scope;

    private $state;

    private $api_param = ['response_type' => 'code'];

    private $api_url = 'https://open.weixin.qq.com/connect/oauth2/authorize';


    /////////////////////设置服务参数/////////////////////////

    public function set_appid($appid)
    {
        $this->appid = $appid;
        $this->api_param['appid'] = $appid;
        return $this;
    }

    public function set_redirect_uri($uri)
    {
        $this->redirect_uri = $uri;
        $this->api_param['redirect_uri'] = $uri;
        return $this;
    }

    public function set_response_type($type)
    {
        $this->response_type = $type;
        $this->api_param['response_type'] = $type;
        return $this;
    }

    public function set_scope($scope)
    {
        $this->scope = $scope;
        $this->api_param['scope'] = $scope;
        return $this;
    }

    public function set_state($state)
    {
        $this->state = $state;
        $this->api_param['state'] = $state;
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

    public function get_redirect_uri()
    {
        return $this->redirect_uri;
    }

    public function get_response_type()
    {
        return $this->response_type;
    }

    public function get_scope()
    {
        return $this->scope;
    }

    public function get_state()
    {
        return $this->state;
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
