<?php

namespace app\auth\controller;

use app\auth\container\Component;
use app\auth\container\Definition;
use app\auth\model\AppKey as AppKeyModel;
use app\auth\logic\AppKey as AppKeyLogic;
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