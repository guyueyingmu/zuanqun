<?php

namespace app\user\controller;

use app\user\container\Component;
use app\user\container\Definition;
use app\user\model\Cms as CmsModel;
use app\user\logic\Cms as CmsLogic;
use liugene\linkrest\Restful;

class CmsBase
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('cms')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $team = new CmsLogic();
                    $team->set('cms',function(){
                        return new CmsModel();
                    });
                    return $team;
                })
            );
    }

    //cms设置首页
    public function index()
    {
        return view('default/cms_base/index',[
            'info' => Component::getInstance()->get('cms')->select()
        ]);
    }

    public function add()
    {
        $data = Component::getInstance()->get('cms')->put();
        Restful::request()
            ->setData(['code' => 1, 'msg' => $data])
            ->send();
    }

}