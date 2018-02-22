<?php

namespace app\auth\controller;

use auth\container\Component;
use auth\container\Definition;
use auth\model\AppKey as AppKeyModel;
use auth\logic\AppKey as AppKeyLogic;
use liugene\linkrest\Restful;

class AppKey
{

    private $_app;

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
        $this->_app = Component::getInstance()->get('app');
        $secret = $this->resetSecret();
        return $this->_app->create($uid,$app_id,$secret);
    }

    private function resetSecret()
    {
        return $this->_app->resetSecret();
    }

}