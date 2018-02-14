<?php

namespace app\console\controller;

use app\console\container\Component;
use app\console\container\Definition;
use app\console\model\Verify as VerifyModel;
use app\console\logic\Verify as VerifyLogic;
use liugene\linkrest\Restful;

class Verify
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('verify')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $verify = new VerifyLogic();
                    $verify->set('verify',function(){
                        return new VerifyModel();
                    });
                    return $verify;
                })
            );
    }

    public function verify()
    {

        switch(Restful::request()->getRequestMethod()){
            case 'get':
                $this->getverify();
                break;
            case 'post':
                $this->addVerify();
                break;
            default :
                Restful::request()
                    ->setData(['code' => 301, 'msg' => '操作非法!', 'data' => []])
                    ->send();
        }
    }

    private function getVerify()
    {
        $open = Component::getInstance()->get('verify');
        Restful::request()
            ->setData(['code' => 0, 'msg' => '',  'count' => $open->countVerify(), 'data' => $open->getVerify()])
            ->send();
    }

    private function addVerify()
    {
        $data = Component::getInstance()->get('menu')->addMenu();
        Restful::request()
            ->setData(['code' => 1, 'msg' => $data])
            ->send();
    }

}