<?php

namespace app\auth\controller;

use auth\container\Component;
use auth\container\Definition;
use auth\model\Send as SendModel;
use auth\logic\Send as SendLogic;
use liugene\linkrest\Restful;
use app\logic\Send as SendSender;

class Send
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('send')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $send = new SendLogic();
                    $send->set('send',function(){
                        return new SendModel();
                    });
                    $send->set('sender',function(){
                        return SendSender::getInstance();
                    });
                    return $send;
                })
            );
    }

    public function send()
    {
        $data = Component::getInstance()->get('send')->handle();
        Restful::request()
            ->setData(['code' => 1, 'msg' => $data])
            ->send();
    }

    public function verify($code,$phone)
    {
        return Component::getInstance()->get('send')->verify($code,$phone);
    }

}
