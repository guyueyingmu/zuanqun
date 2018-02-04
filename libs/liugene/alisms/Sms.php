<?php

namespace liugene\alisms;
use liugene\alisms\request\ProfileRequest;
use liugene\alisms\request\RpcRequest;

class Sms extends ProfileRequest
{

    /**
     * SMS单例对象
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
            $class = '\\liugene\\alisms\\service\\' . $service;
            $this->_service = new $class();
        }
        return $this->_service;
    }

    private function generate_url()
    {
        $url = $this->_rpc_request->generate_url($this,$this->_service);
        return $this->request($url);
    }

    public function send()
    {
        return $this->generate_url();
    }

    private function request($url)
    {
        return Request::get($url);
    }
}