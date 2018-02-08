<?php

namespace app\index\controller;

use app\index\container\Component;
use app\index\container\Definition;
use app\index\model\Help as HelpModel;
use app\index\logic\Help as HelpLogic;

class Help
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('help')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $help = new HelpLogic();
                    $help->set('help',function(){
                        return new HelpModel();
                    });
                    return $help;
                })
            );
    }

    public function index()
    {
        $help = Component::getInstance()->get('help');
        return view('default/help/index',[
            'view' => $help->getHelpView()
            ,'title' => $help->getHelpTitle()
        ]);
    }

    public function item()
    {
        if(is_null(input('id'))){
            exit('缺少参数');
        }
        return view('default/help/item',[
            'content' => Component::getInstance()->get('help')->getHelpItem()
        ]);
    }

    public function titleItem(){}

}