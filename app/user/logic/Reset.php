<?php

namespace app\user\logic;

use app\user\base\Logic;

class Reset extends Logic
{

    public function edit()
    {
        $user = $this->get('user')->getUser();
        if($user['z_password'] == md5(md5(input('old_password')))){
            return $this->get('reset')->resetPassword();
        }
        return '旧密码输入错误';
    }

}
