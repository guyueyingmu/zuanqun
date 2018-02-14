<?php

namespace app\console\model;

use think\Db;

class User
{

    public function getUserInfo()
    {
        return Db::table('zq_user')->select();
    }

    public function countUser()
    {
        return Db::table('zq_user')->count('id');
    }

}