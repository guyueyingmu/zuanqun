<?php

namespace app\console\model;
use think\Db;
use think\Exception;

class HelpDoc
{

    public function getDoc()
    {
        return Db::table('zq_user')->select();
    }

    public function addDoc($data)
    {
        Db::startTrans();
        try{
            $id = Db::table('zq_helpdoc')->insertGetId($data);
            $res['help_id'] = $id;
            $res['content'] = input('helpdoc');
            $res['posttime'] = $data['posttime'];
            Db::table('zq_helpdoc_content')->insertGetId($res);
            Db::commit();
            return $res;
        } catch (Exception $e) {
            Db::rollback();
            return false;
        }
    }

}
