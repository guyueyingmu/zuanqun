<?php

namespace app\open\controller;
use liugene\linkdi\Container;
use liugene\linkdi\InstanceDefinition;
use app\open\Logic\ApiDoc;

class Tool
{

    public function index()
    {
//        Container::getInstance()->bind(
//            (new InstanceDefinition())
//                ->setAlias('tool')
//                ->setIsEager(true)
//                ->setClassName('app\open\controller\Wiki')
//        );
//        dump(Container::getInstance()->get('tool'));
        Container::getInstance()->bind(
            (new InstanceDefinition())
                ->setAlias('tool')
                ->setIsEager(true)
                ->setCallBack(function(ApiDoc $apidoc){
                    return new Wiki($apidoc);
                })
        );
        dump(Container::getInstance());
    }

    //二合一转链页面
    public function toUland()
    {
        return view('default/tool/index');
    }

    //二合一解密
    public function deCodeUland()
    {
        return view('default/tool/deuland');
    }

    //淘宝客转链
    public function tbkTranLinks()
    {
        return view('default/tool/tbktran');
    }

}
