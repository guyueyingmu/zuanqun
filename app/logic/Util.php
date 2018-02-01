<?php

namespace app\logic;
use app\logic\util\UtilInterface;
use app\logic\util\UtilException;

class Util
{
    //保存单例
    static private $_instance;

    //保存设置的实例对象
    static private $_object = [];

    static public function getInstance($alias=null)
    {
        if(!is_null($alias)){
            return self::get($alias);
        }
        if(isset(static::$_instance)){
            return static::$_instance;
        } else {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    static public function set($alias,UtilInterface $object)
    {
        if(self::exists($alias)){
            throw new UtilException('已经设置实例对象');
        }
        self::$_object[$alias] = $object;
        return $object;
    }

    static public function get($alias)
    {
        if(!self::exists($alias)){
            throw new UtilException('未设置实例对象');
        }
        return self::$_object[$alias];
    }

    //判断是否设置别名
    static public function exists($alias)
    {
        if(array_key_exists($alias,self::$_object)){
            return true;
        } else {
            return false;
        }
    }
}
