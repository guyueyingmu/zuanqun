<?php

namespace app\console\controller;

use app\console\container\Component;
use app\console\container\Definition;
use app\console\model\User as UserModel;
use app\console\logic\User as UserLogic;
use liugene\linkrest\Restful;

class User
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('user')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $user = new UserLogic();
                    $user->set('user',function(){
                        return new UserModel();
                    });
                    return $user;
                })
            );
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
        $open = Component::getInstance()->get('user');
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