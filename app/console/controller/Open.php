<?php

namespace app\console\controller;

use app\console\container\Component;
use app\console\container\Definition;
use app\console\model\Open as OpenModel;
use app\console\logic\Open as OpenLogic;
use liugene\linkrest\Restful;

class Open
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('open')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $open = new OpenLogic();
                    $open->set('open',function(){
                        return new OpenModel();
                    });
                    return $open;
                })
            );
    }

    public function open()
    {
        switch(Restful::request()->getRequestMethod()){
            case 'get':
                $this->getApp();
                break;
            case 'post':
                $this->addApp();
                break;
            default :
                Restful::request()
                    ->setData(['code' => 301, 'msg' => '操作非法!', 'data' => []])
                    ->send();
        }
    }

    private function getApp()
    {
        $open = Component::getInstance()->get('open');
        Restful::request()
            ->setData(['code' => 0, 'msg' => '',  'count' => $open->countApp(), 'data' => $open->getApp()])
            ->send();
    }

    private function addApp()
    {
        $data = Component::getInstance()->get('menu')->addMenu();
        Restful::request()
            ->setData(['code' => 1, 'msg' => $data])
            ->send();
    }

    public function user()
    {
        switch(Restful::request()->getRequestMethod()){
            case 'get':
                $this->getUser();
                break;
            case 'post':
                $this->addUser();
                break;
            default :
                Restful::request()
                    ->setData(['code' => 301, 'msg' => '操作非法!', 'data' => []])
                    ->send();
        }
    }

    private function getUser()
    {
        $open = Component::getInstance()->get('open');
        Restful::request()
            ->setData(['code' => 0, 'msg' => '',  'count' => $open->countUser(), 'data' => $open->getUser()])
            ->send();
    }

    private function addUser()
    {
        $data = Component::getInstance()->get('menu')->addMenu();
        Restful::request()
            ->setData(['code' => 1, 'msg' => $data])
            ->send();
    }

}