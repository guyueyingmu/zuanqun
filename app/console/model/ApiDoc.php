<?php

namespace app\console\model;
use think\Db;
class ApiDoc
{
    public function getDoc()
    {
        return Db::table('zq_user')->select();
    }

    public function addDoc($data)
    {
        return Db::table('zq_apidoc')->insert($data);
    }

}