<?php

namespace app\console\logic;

use app\console\base\Logic;

class Menu extends Logic
{

    private $tree_list = [];

    public function select()
    {
        return $this->get('menu')->getMenuInfo();
    }

    public function countMenu()
    {
        return $this->get('menu')->getMenuCount();
    }

    public function addMenu()
    {
        $data['cat_name'] = input('class_name');
        $data['pid'] = input('menu_tree');
        $data['posttime'] = time();
        $data['uid'] = 1;
        return $this->get('menu')->addMenuInfo($data);
    }

    public function getMenuTreeData()
    {
        return $this->get('menu')->getAllMenu();
    }

    public function getMenuTree(&$data,$pid = 0,$count = 1) {
        foreach ($data as $key => $value){
            if($value['pid']==$pid){
                $value['count'] = $count;
                $this->tree_list[]=$value;
                unset($data[$key]);
                $this->getMenuTree($data,$value['id'],$count+1);
            }
        }
        return $this->tree_list;
    }

}