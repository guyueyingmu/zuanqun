<?php

namespace app\auth\model;

use think\Db;
use think\Exception;

class RegUserInfo
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
            AppKeyInfo::addKey(['zq_user_id' => $res, 'app_key' => 'zq' . md5($res.time()), 'app_secret' => '', 'posttime' => time()]);
            Db::commit();
            return $res;
        } catch (Exception $e) {
            Db::rollback();
            return false;
        }
    }

}
