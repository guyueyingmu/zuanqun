<?php

namespace app\user\controller;

use app\user\container\Component;
use app\user\container\Definition;
use app\user\model\Pid as PidModel;
use app\user\logic\Pid as PidLogic;
use liugene\linkrest\Restful;

class Pid
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('pid')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $team = new PidLogic();
                    $team->set('pid',function(){
                        return new PidModel();
                    });
                    return $team;
                })
            );
    }

    public function add()
    {
        $data = Component::getInstance()->get('pid')->put();
        Restful::request()
            ->setData(['code' => 1, 'msg' => $data])
            ->send();
    }

}