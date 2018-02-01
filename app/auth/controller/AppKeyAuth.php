<?php

namespace app\auth\controller;
use app\auth\model\AppKeyInfo;

class AppKeyAuth
{

    //生成appkey
    static public function create($id)
    {
        return AppKeyInfo::addKey(['zq_user_id' => $id, 'app_key' => 'zq' . md5($id), 'app_secret' => '', 'posttime' => time()]);
    }

}
