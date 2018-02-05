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
        return view('default/help/index');
    }

}