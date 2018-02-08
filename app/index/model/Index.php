<?php

namespace app\index\model;

use think\Db;

class Index
{

    public function getNewHelpInfo()
    {
        return Db::table('zq_helpdoc')
            ->field('id,help_title,posttime')
            ->limit(4)
            ->select();
    }

    public function getNewNoticeInfo()
    {
        return Db::table('zq_noticedoc')
            ->field('id,notice_title,posttime')
            ->limit(4)
            ->select();
    }

    public function getNewApiInfo()
    {
        return Db::table('zq_apidoc')
            ->field('id,api_title,posttime')
            ->limit(4)
            ->select();
    }

}
