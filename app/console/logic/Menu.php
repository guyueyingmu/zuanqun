<?php

namespace app\console\logic;

use app\console\base\Logic;

class Menu extends Logic
{

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
        $data['pid'] = input('par_id');
        $data['posttime'] = time();
        $data['uid'] = 1;
        return $this->get('menu')->addMenuInfo($data);
    }

}