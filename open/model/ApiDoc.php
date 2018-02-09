<?php

namespace open\model;
use think\Db;

class ApiDoc
{

    public function getDoc()
    {
        return Db::table('zq_apidoc')
            ->alias('a')
            ->field('a.id,b.posttime,a.api_title,b.content')
            ->join('zq_apidoc_content b','a.id = b.api_id','left')
            ->where('a.id=3')
            ->find();
    }

}
