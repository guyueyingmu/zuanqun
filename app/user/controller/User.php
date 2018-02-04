<?php

namespace app\user\controller;
use app\auth\center\Check;
use app\user\container\Component;
use app\user\container\Definition;
use app\user\logic\User as UserLogic;
use app\user\model\User as userModel;

class User
{

    private $_check;

    public function __construct(Check $check)
    {
        $this->_check = $check;
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('user')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $appkey = new UserLogic();
                    $appkey->set('user',function(){
                        return new userModel();
                    });
                    return $appkey;
                })
            );
    }

    public function index()
    {
        if($this->_check->isLogin()){
            return view('default/user/index');
        } else {
            return redirect('auth/login/index');
        }
    }

    public function info()
    {
        return view('default/user/info',[
            'info'  =>  Component::getInstance()->get('user')->getUser()
        ]);
    }
}