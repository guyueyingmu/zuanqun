<?php

namespace liugene\alitool\service;

class DecodeUlandService implements ToolServiceInterface
{

    //二合一解密URL
    private $url = 'https://uland.taobao.com/cp/coupon';

    //加密字符串
    private $e;

    ///////////////设置服务设置//////////////

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    public function setE($e)
    {
        $this->e = $e;
        $this->param['e'] = $e;
        return $this;
    }

    ///////////////获取服务设置//////////////

    public function getE()
    {
        return $this->e;
    }

    private $param = [];

    public function getParams()
    {
        return $this->param;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getClassName()
    {
        return __CLASS__;
    }

}