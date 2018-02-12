<?php

namespace app\upgrade\controller;

use auth\center\WebAuth;
use upgrade\container\Component;
use upgrade\container\Definition;
use upgrade\model\Update as UpdateModel;
use upgrade\logic\Update as UpdateLogic;
use liugene\linkrest\Restful;

class Update
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('update')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $update = new UpdateLogic();
                    $update->set('update',function(){
                        return new UpdateModel();
                    });
                    $update->set('webAuth',function(){
                        return new WebAuth();
                    });
                    $update->set('pcms',function(){
                        return new Pcms();
                    });
                    return $update;
                })
            );
    }

    public function index()
    {
        Component::getInstance()->get('update')->select();
    }

}