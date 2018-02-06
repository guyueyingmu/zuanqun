<?php

namespace liugene\zqsdk\request;

abstract class ProfileRequest
{

    /**
     * 钻群app_key
     * @var string $app_key
     */
    private $app_key;

    /**
     * 返回格式 目前只支持json格式
     * @var string $format
     */
    private $format = 'json';

    /**
     * 时间格式 GMT格式
     * @var string $timestamp
     */
    private $timestamp;

    /**
     * api版本 默认2.0
     * @var string $v
     */
    private $v = '2.0';

    /**
     * 生成的签名
     * @var string $sign
     */
    private $sign;

    /**
     * 钻群app_secret
     * @var string $app_secret
     */
    private $app_secret;

    private $action = 'Get';

    private $request_url = 'http://api.zuanqun.com:8080/router/rest';

    public function setAppKey($app_key)
    {
        $this->app_key = $app_key;
        return $this;
    }

    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    public function setV($v)
    {
        $this->v = $v;
        return $this;
    }

    public function setSign($sign)
    {
        $this->sign = $sign;
        return $this;
    }

    public function setAppSecret($app_secret)
    {
        $this->app_secret = $app_secret;
        return $this;
    }

    public function setRequestUrl($url)
    {
        $this->request_url = $url;
        return $this;
    }

    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }


    ///////////获取参数///////////////


    public function getAppKey()
    {
        return $this->app_key;
    }

    public function getFormat()
    {
        return $this->format;
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function getV()
    {
        return $this->v;
    }

    public function getSign()
    {
        return $this->sign;
    }

    public function getAppSecret()
    {
        return $this->app_secret;
    }

    public function getRequestUrl()
    {
        return $this->request_url;
    }

    public function getAction()
    {
        return $this->action;
    }

}
