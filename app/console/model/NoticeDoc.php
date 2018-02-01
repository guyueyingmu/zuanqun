<?php

namespace app\console\model;
use think\Db;

class NoticeDoc
{

    public function getDoc()
    {
        return Db::table('zq_user')->select();
    }

    public function addDoc($data)
    {
        return Db::table('zq_noticedoc')->insert($data);
    }

}
