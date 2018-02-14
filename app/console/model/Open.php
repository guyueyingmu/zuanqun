<?php

namespace app\console\model;

use think\Db;

class Open
{

    public function getCountApp()
    {
        return Db::table('zq_open_web')
            ->alias('a')
            ->join('zq_open b','a.open_id = b.id','left')
            ->join('zq_appkey c','a.app_id = c.app_id','right')
            ->count('a.id');
    }

    public function getAppInfo()
    {

        return Db::table('zq_open_web')
            ->alias('a')
            ->join('zq_open b','a.open_id = b.id','left')
            ->join('zq_appkey c','a.app_id = c.app_id','left')
            ->field('a.*,b.name,c.app_key,c.app_secret')
            ->select();

    }

    public function getUserInfo()
    {
        return Db::table('zq_open')
            ->alias('a')
            ->join('zq_user b','a.zq_uid = b.id','left')
            ->select();
    }

    public function getCountUser()
    {
        return Db::table('zq_open')
            ->alias('a')
            ->join('zq_user b','a.zq_uid = b.id','left')
            ->count('a.id');
    }

}