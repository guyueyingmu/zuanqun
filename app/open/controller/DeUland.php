<?php

namespace app\open\controller;

use open\container\Component;
use open\container\Definition;
use open\logic\DeUland as DeUlandLogic;
use app\logic\Util;
use app\logic\util\AliTool;

class DeUland
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('deuland')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $deuland = new DeUlandLogic();
                    $deuland->set('utilConfig',function(){
                        $util = Util::getInstance();
                        $alitool = $util->set('alitool',new AliTool());
                        $alitool->setService('deuland','DeUland');
                        return $util;
                    });
                    $deuland->set('util',function(){
                        return  Util::getInstance();
                    });
                    return $deuland;
                })
            );
    }

    public function deUland()
    {
        Component::getInstance()->get('deuland')->deUland();
    }

}