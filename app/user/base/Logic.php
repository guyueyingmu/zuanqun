<?php
namespace app\user\base;

abstract class Logic
{

    protected $_logic_model = [];

    public function select()
    {
        // TODO: Implement select method.
    }
    public function put()
    {
        // TODO: Implement put method.
    }

    public function delete()
    {
        // TODO: Implement delete method.
    }

    public function edit()
    {
        // TODO: Implement edit method.
    }

    public function handle()
    {
        // TODO: Implement handle method.
    }

    /**
     * @param string $alias
     * @param callback $di
     */
    public function set($alias,$di)
    {
        if(!isset($this->_api_doc_model[$alias])){
            $this->_logic_model[$alias] = $di;
        }
    }

    /**
     * @param string $alias
     * @throws
     * @return Object $intance
     */
    public function get($alias)
    {
        if(isset($this->_logic_model[$alias])){
            $definition = $this->_logic_model[$alias];
        } else {
            throw new \Exception('未设置该别名，无法获得实例');
        }
        if (is_object($definition)) {
            $instance = call_user_func($definition);
        }
        return $instance;
    }

}