<?php

namespace app\console\model;

use think\Db;

class Verify
{

    public function getVerifyInfo()
    {
        return Db::table('zq_team_info')
            ->alias('a')
            ->join('zq_user b','a.zq_uid=b.id','left')
            ->field('a.*,b.zq_username')
            ->select();
    }

    public function countVerify()
    {
        return Db::table('zq_team_info')
            ->alias('a')
            ->join('zq_user b','a.zq_uid=b.id','left')
            ->count('a.id');
    }

}