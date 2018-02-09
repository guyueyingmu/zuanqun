<?php

namespace app\auth\controller;

use auth\container\Component;
use auth\container\Definition;
use auth\model\WebKey as WebKeyModel;
use auth\logic\WebKey as WebKeyLogic;

class WebKey
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('web')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $web = new WebKeyLogic();
                    $web->set('web',function(){
                        return new WebKeyModel();
                    });
                    return $web;
                })
            );
    }

    public function create($use_id)
    {
        return Component::getInstance()->get('web')->create($use_id);
    }

}
