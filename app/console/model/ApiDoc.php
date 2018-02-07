<?php

namespace app\console\model;
use think\Db;
use think\Exception;
class ApiDoc
{
    public function getDoc()
    {
        return Db::table('zq_user')->select();
    }

    public function addDoc($data)
    {
        Db::startTrans();
        try{
            $id = Db::table('zq_apidoc')->insertGetId($data);
            $res['api_id'] = $id;
            $res['content'] = input('apidoc');
            $res['posttime'] = $data['posttime'];
            Db::table('zq_apidoc_content')->insertGetId($res);
            Db::commit();
            return $res;
        } catch (Exception $e) {
            Db::rollback();
            return false;
        }
    }

}