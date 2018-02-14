<?php

namespace app\seller\controller;

use app\seller\container\Component;
use app\seller\container\Definition;
use app\seller\model\Team as TeamModel;
use app\seller\logic\Team as TeamLogic;
use liugene\linkrest\Restful;

class Team
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('team')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $team = new TeamLogic();
                    $team->set('team',function(){
                        return new TeamModel();
                    });
                    return $team;
                })
            );
    }

    public function team()
    {
        $data = Component::getInstance()->get('team')->put();
        Restful::request()
            ->setData(['code' => 1, 'msg' => $data])
            ->send();
    }

}
