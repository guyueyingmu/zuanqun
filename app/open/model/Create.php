<?php

namespace app\open\model;
use app\auth\controller\AppKey;

use think\Db;
use think\Exception;

class Create
{

    public function createWebInfo($data,AppKey $app)
    {
        Db::startTrans();
        try{
            $res = Db::table('zq_open_web')->insert($data);
            $app->create(11,$data['app_id']);
            Db::commit();
            return $res;
        } catch (Exception $e) {
            Db::rollback();
            dump($e->getMessage());
            return false;
        }
    }

    public function getApplicationCount()
    {
        return Db::table('zq_open_web')->count('id');
    }

    public function getApplication()
    {
        return Db::table('zq_open_web')->where('open_id = 1')->select();
    }

    public function getApplicationKeyByAppId($app_id)
    {
        return Db::table('zq_appkey')->field('app_key,app_secret,app_id')->where('app_id = ' . $app_id)->find();
    }

}
