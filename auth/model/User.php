<?php

namespace auth\model;

use think\Db;

class User
{

    public function getUserInfo()
    {
        return Db::table('zq_user')->where('id = 11')->find();
    }

}
