<?php

namespace app\download\model;

use think\Db;

class App
{

    public function getAppInfo($id)
    {
        return Db::table('zq_web_key')->where('zq_user_id = ' . $id)->find();
    }

}