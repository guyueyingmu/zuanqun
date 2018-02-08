<?php

namespace app\index\controller;

use app\index\container\Component;
use app\index\container\Definition;
use app\index\model\Index as IndexModel;
use app\index\logic\Index as IndexLogic;

class Index
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('index')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $index = new IndexLogic();
                    $index->set('index',function(){
                        return new IndexModel();
                    });
                    return $index;
                })
            );
    }

    public function index()
    {
        $doc = Component::getInstance()->get('index');
        return view('default/index/index',[
            'help' => $doc->getNewHelp()
            ,'notice' => $doc->getNewNotice()
            ,'api' => $doc->getNewApi()
        ]);
    }
}
