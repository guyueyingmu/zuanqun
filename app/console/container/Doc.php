<?php

namespace app\console\container;

class Doc
{

    /**
     * 保存所有文档设置别名
     * @Array $_service
     */
    private $_service = [];

    static private $_instance;

    /**
     * @param string $alias
     * @param callback $service
     */
    public function set($alias,$service)
    {
        if(!isset($this->_service[$alias])){
            $this->_service[$alias] = $service;
        }
    }

    /**
     * @param string $alias
     * @throws
     * @return Object $intance
     */
    public function get($alias)
    {
        if(isset($this->_service[$alias])){
            $definition = $this->_service[$alias];
        } else {
            throw new DocException('未设置该别名，无法获得实例');
        }
        if (is_object($definition)) {
            $instance = call_user_func($definition);
        }
        return $instance;
    }

    static public function getInstance()
    {
        if(is_null(self::$_instance)){
            self::$_instance = new self();
            return self::$_instance;
        }
        return self::$_instance;
    }

}
