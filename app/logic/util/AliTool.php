<?php

namespace app\logic\util;
use liugene\alitool\AliTool as Alitools;

class AliTool implements UtilInterface
{

    private $_init;

    private $_service = [];

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
        throw new UtilException('未初始化该实例');
    }

    public function setConfig()
    {
        if(isset($this->_init)){
            return $this->_init;
        } else {
            $this->_init = Alitools::getInstance();
        }
        return $this->_init;
    }

    public function select($alias)
    {
        return $this->setConfig()->execute($this->_service[$alias]->getUtil());
    }

}
