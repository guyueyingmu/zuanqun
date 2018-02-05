<?php

namespace app\auth\model;

use think\Db;
use think\Exception;

class Reg
{

    /**
     * @param $param
     * @return bool|int|string
     */
    static public function regData($param)
    {
        Db::startTrans();
        try{
            $res = Db::table('zq_user')->insertGetId($param);
            Db::commit();
            return $res;
        } catch (Exception $e) {
            Db::rollback();
            return false;
        }
    }

}
