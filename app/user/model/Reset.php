<?php

namespace app\user\model;

use think\Db;

class Reset
{

    public function resetPassword()
    {
        $password = md5(md5(input('password')));
        return Db::table('zq_user')->where('id = 11')->update(['z_password' => $password]);
    }

}
