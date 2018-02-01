<?php

namespace app\logic\goods;
use zuanqun\auth\Top;
use think\Config;

class Alimama implements GoodsInterface
{

    private $_init;

    private $_service = [];

    private $appkey;

    private $secret;

    //设置appkey
    public function setAppKey($appkey)
    {
        $this->appkey = $appkey;
        $this->setConfig()->set_app_key($appkey);
        return $this;
    }

    //设置秘钥
    public function setSecret($secret)
    {
        $this->secret = $secret;
        $this->setConfig()->set_secret_key($secret);
        return $this;
    }

    //////////////接口方法////////////////////////////

    public function setService($alias, $service)
    {
        if(isset($this->_service[$alias])){
            return $this->_service[$alias];
        } else {
            $this->_service[$alias] = new $service;
        }
        return $this->_service[$alias];
    }

    public function getService($alias)
    {
        if(isset($this->_service[$alias])){
            return $this->_service[$alias];
        }
    }

    public function setConfig()
    {
        if(isset($this->_init)){
            return $this->_init;
        } else {
            $this->_init = new Top();
        }
        return $this->_init;
    }

    public function select($alias)
    {
        if(!$this->isSetAppKey()){
            $this->setConfig()->set_app_key(Config::get('ali.tbk.appkey'));
            $this->setConfig()->set_secret_key(Config::get('ali.tbk.secret'));
        }
        return $this->setConfig()->execute($this->_service[$alias]->getGoods());
    }

    /////////////////判断方法////////////////////
    private function isSetAppKey()
    {
        if(isset($this->appkey)){
            return true;
        } else {
            return false;
        }
    }

}
