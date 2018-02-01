<?php

namespace liugene\alitool;

use liugene\alitool\service\ToolException;
use liugene\alitool\service\ToolServiceInterface;

class AliTool
{

    static private $_instance = null;

    private $_service = [];

    static public function getInstance()
    {
        if(is_null(self::$_instance)){
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    //设置服务
    public function setService($alias,ToolServiceInterface $service)
    {
        if(isset($this->_service[$alias])){
            return $this->_service[$alias];
        }
        $this->_service[$alias] = new $service;
    }

    //获取服务实例
    public function getService($alias)
    {
        if(!isset($this->_service[$alias])){
            throw new ToolException('未初始化该实例');
        }
        return $this->_service[$alias];
    }

    //构造请求地址
    private function generate_url($param)
    {
        $url = '';
        foreach($param as $k => $v)
        {
            $url .= "$k=" . $v . "&";
        }
        return $url;
    }

    //统一执行入口
    public function execute($alias)
    {
        $url = $this->generate_url($this->getService($alias)->getParams());
        if($this->getService($alias)->getClassName() == 'liugene\alitool\service\ToUlandService'){
            return $this->getService($alias)->getUrl() . '?' . $url;
        }
        return $this->request($this->getService($alias)->getUrl() . '?' . $url);
    }

    //请求
    private function request($url)
    {
        return Request::get($url);
    }

}