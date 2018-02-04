<?php

namespace app\user\model;

use think\Db;

class User
{

    public function getUserInfo($id)
    {
        return Db::table('zq_user')->where(['id' => $id])->find();
    }

}