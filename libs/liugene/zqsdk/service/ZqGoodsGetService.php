<?php

namespace liugene\zqsdk\service;

class ZqGoodsGetService implements ServiceInterface
{

    /**
     * Api方法默认不用修改
     */
    private $method = 'ZqGoodsGet';

    private $api_param = [];

    public function setMethod($method)
    {
        $this->method = $method;
        $this->api_param['method'] = $method;
        return $this;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function get_api_param()
    {
        return $this->api_param;
    }

}
