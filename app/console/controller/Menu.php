<?php

namespace app\console\controller;

use app\console\container\Component;
use app\console\container\Definition;
use app\console\model\Menu as MenuModel;
use app\console\logic\Menu as MenuLogic;
use liugene\linkrest\Restful;

class Menu
{

    public function __construct()
    {
        Component::getInstance()
            ->bind((new Definition())
                ->setAlias('menu')
                ->setIsSingleton(true)
                ->setCallBack(function(){
                    $menu = new MenuLogic();
                    $menu->set('menu',function(){
                        return new MenuModel();
                    });
                    return $menu;
                })
            );
    }

    public function Menu()
    {
        switch(Restful::request()->getRequestMethod()){
            case 'get':
                $this->getMenu();
                break;
            case 'post':
                $this->addMenu();
                break;
            default :
                Restful::request()
                    ->setData(['code' => 301, 'msg' => '操作非法!', 'data' => []])
                    ->send();
        }
    }

    private function getMenu()
    {
        Restful::request()
            ->setData(['code' => 0, 'msg' => '',  'count' => Component::getInstance()->get('menu')->countMenu(), 'data' => Component::getInstance()->get('menu')->select()])
            ->send();
    }

    private function addMenu()
    {
        $data = Component::getInstance()->get('menu')->addMenu();
        Restful::request()
            ->setData(['code' => 1, 'msg' => $data])
            ->send();
    }

    //获取菜单树
    public function getMenuTree()
    {
        $menu = Component::getInstance()->get('menu');
        $data = $menu->getMenuTreeData();
        $data = $menu->getMenuTree($data);
        dump($data);die;
        foreach($data as $k => $v){
            echo $v['cat_name'];
        }
        Restful::request()
            ->setData(['code' => 1, 'msg' => $data])
            ->send();
    }

}