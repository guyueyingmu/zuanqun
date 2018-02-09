<?php

namespace open\base;

abstract class Doc
{

    protected $_di = [];

    public function select()
    {
        // TODO: Implement select method.
    }

    /**
     * @param string $alias
     * @param callback $di
     */
    public function set($alias,$di)
    {
        if(!isset($this->_di[$alias])){
            $this->_di[$alias] = $di;
        }
    }

    /**
     * @param string $alias
     * @throws
     * @return Object $intance
     */
    public function get($alias)
    {
        if(isset($this->_di[$alias])){
            $definition = $this->_di[$alias];
        } else {
            throw new \Exception('未设置该别名，无法获得实例');
        }
        if (is_object($definition)) {
            $instance = call_user_func($definition);
        }
        return $instance;
    }

}
