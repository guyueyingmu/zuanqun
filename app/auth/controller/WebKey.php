<?php

namespace app\auth\controller;

use app\auth\container\Component;
use app\auth\container\Definition;
use app\auth\model\WebKey as WebKeyModel;
use app\auth\logic\WebKey as WebKeyLogic;

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
