<?php

namespace app\user\controller;
use app\user\container\Component;
use app\user\container\Definition;
use app\user\model\AppKey as AppKeyModel;
use app\user\logic\AppKey as AppKeyLogic;

class AppKey
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('appkey')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $appkey = new AppKeyLogic();
                    $appkey->set('appkey',function(){
                        return new AppKeyModel();
                    });
                    return $appkey;
                })
        );
    }

    //appkey管理界面
    public function manage()
    {
        return view('default/app_key/manage',[
            'appkey' => Component::getInstance()->get('appkey')->getAppKeyInfo(),
        ]);
    }

}
