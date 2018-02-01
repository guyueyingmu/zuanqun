<?php

namespace app\auth\model;
use think\Db;
use think\Exception;

class AppKeyInfo
{

    //添加appkey
    static public function addKey($param)
    {
        try{
            return Db::table('zq_appkey')->insert($param);
        } catch (Exception $e) {
            return false;
        }
    }

}
