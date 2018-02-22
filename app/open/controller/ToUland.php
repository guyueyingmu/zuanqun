<?php

namespace app\open\controller;

use open\container\Component;
use open\container\Definition;
use open\logic\ToUland as ToUlandLogic;
use app\logic\Util;
use app\logic\util\AliTool;


class ToUland
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('touland')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $touland = new ToUlandLogic();
                    $touland->set('utilConfig',function(){
                        $util = Util::getInstance();
                        $alitool = $util->set('alitool',new AliTool());
                        $alitool->setService('touland','ToUland');
                        return $util;
                    });
                    $touland->set('util',function(){
                       return  Util::getInstance();
                    });
                    return $touland;
                })
            );
    }

    public function toUland()
    {
        Component::getInstance()->get('touland')->toUland();
    }

}