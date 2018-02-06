<?php

namespace liugene\zqsdk;

use liugene\zqsdk\request\ProfileRequest;
use liugene\zqsdk\request\RpcRequest;

class Zq extends ProfileRequest
{

    /**
     * 单例对象
     * @var Object $_instance
     */
    static private $_instance;

    /**
     * 服务类对象
     * @var Object $_service
     */
    private $_service;

    /**
     * RpcRequest类实例对象
     * @var Object $_rpc_request
     */
    private $_rpc_request;

    public function __construct()
    {
        if(is_null($this->_rpc_request)){
            $this->_rpc_request = new RpcRequest();
        }
    }

    static public function getInstance()
    {
        if(is_null(self::$_instance)){
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function setService($service)
    {
        if(is_null($this->_service)){
            $class = '\\liugene\\zqsdk\\service\\' . $service;
            $this->_service = new $class();
        }
        return $this->_service;
    }

    private function generate_url()
    {
        $param = $this->_rpc_request->generate_sign($this,$this->_service);
        $url = $this->getRequestUrl() . '?';
        foreach($param as $k => $v){
            $url .= $k . '=' . $v . '&';
        }
        return substr($url,0,-1);
    }

    public function execute()
    {
        return $this->request($this->generate_url());
    }

    private function request($url)
    {
        return Request::get($url);
    }

}
