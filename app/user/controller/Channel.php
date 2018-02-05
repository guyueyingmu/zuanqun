<?php

namespace app\user\controller;

use app\user\container\Component;
use app\user\container\Definition;
use app\user\model\Channel as ChannelModel;
use app\user\logic\Channel as ChannelLogic;
use liugene\linkrest\Restful;

class Channel
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('channel')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $team = new ChannelLogic();
                    $team->set('channel',function(){
                        return new ChannelModel();
                    });
                    return $team;
                })
            );
    }

    //推广方案首页首页
    public function index()
    {
        return view('default/channel/template');
    }

    public function add()
    {
        $data = Component::getInstance()->get('channel')->put();
        Restful::request()
            ->setData(['code' => 1, 'msg' => $data])
            ->send();
    }

}
