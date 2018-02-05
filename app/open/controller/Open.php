<?php

namespace app\open\controller;

use app\open\container\Component;
use app\open\container\Definition;
use app\open\model\Open as OpenModel;
use app\open\logic\Open as OpenLogic;
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

    public function owner()
    {
        return view('default/open/owner',[
            'info' => Component::getInstance()->get('open')->select()
        ]);
    }

    public function add()
    {
        $data = Component::getInstance()->get('open')->put();
        Restful::request()
            ->setData(['code' => 1, 'msg' => $data])
            ->send();
    }

}
