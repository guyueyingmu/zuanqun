<?php

namespace app\auth\controller;

use auth\container\Component;
use auth\container\Definition;
use auth\model\AppKey as AppKeyModel;
use auth\logic\AppKey as AppKeyLogic;
use liugene\linkrest\Restful;

class AppKey
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('app')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $app = new AppKeyLogic();
                    $app->set('app',function(){
                        return new AppKeyModel();
                    });
                    return $app;
                })
            );
    }

    public function create($uid,$app_id)
    {
        $secret = $this->resetSecret();
        return Component::getInstance()->get('app')->create($uid,$app_id,$secret);
    }

    private function resetSecret()
    {
        return Component::getInstance()->get('app')->resetSecret();
    }

}