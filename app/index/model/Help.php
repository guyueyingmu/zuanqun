<?php

namespace app\index\model;

use think\Db;

class Help
{

    public function getTitle()
    {
        return Db::table('zq_class')
            ->field('cat_name,id')
            ->where('pid = 2')->select();
    }

    public function getView($cid)
    {
        return Db::table('zq_helpdoc')
            ->field('help_title,id,s_content')
            ->where('cid = ' . $cid)
            ->select();
    }

    public function getHelpItemInfo($id)
    {
        return Db::table('zq_helpdoc')
            ->alias('a')
            ->join('zq_helpdoc_content b','a.id = b.help_id','left')
            ->field('a.help_title,b.content,b.posttime')
            ->where('b.help_id = ' . $id)
            ->find();
    }

}