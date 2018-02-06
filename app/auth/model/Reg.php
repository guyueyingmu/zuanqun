<?php

namespace app\auth\model;

use think\Db;
use think\Exception;
use app\auth\controller\WebKey;

class Reg
{

    /**
     * @param $param
     * @param WebKey $web
     * @return bool|int|string
     */
    static public function regData($param,WebKey $web)
    {
        Db::startTrans();
        try{
            $res = Db::table('zq_user')->insertGetId($param);
            $web->create($res);
            Db::commit();
            return $res;
        } catch (Exception $e) {
            Db::rollback();
            return false;
        }
    }

}
