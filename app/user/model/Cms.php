<?php

namespace app\user\model;

use think\Db;

class Cms
{

    public function addCmsInfo($data)
    {
        return Db::table('zq_cms')->insert($data);
    }

    public function getCmsInfo()
    {
        return Db::table('zq_cms')->where('zq_uid = 11')->find();
    }

}
