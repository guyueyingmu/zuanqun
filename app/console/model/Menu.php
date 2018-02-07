<?php

namespace app\console\model;

use think\Db;

class Menu
{

    public function getMenuInfo()
    {
        return Db::table('zq_class')->select();
    }

    public function getMenuCount()
    {
        return Db::table('zq_class')->count('id');
    }

    public function addMenuInfo($data)
    {
        return Db::table('zq_class')->insert($data);
    }

    public function getAllMenu()
    {
        return Db::table('zq_class')->select();
    }

}