<?php

namespace app\auth\controller;

use app\auth\container\Component;
use app\auth\container\Definition;
use app\auth\model\WebKey as WebKeyModel;
use app\auth\logic\WebKey as WebKeyLogic;
use liugene\linkrest\Restful;

class WebKey
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('reg')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $app = new WebKeyLogic();
                    $app->set('reg',function(){
                        return new WebKeyModel();
                    });
                    return $app;
                })
            );
    }

    public function create(){}

}
