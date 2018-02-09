<?php

namespace auth\model;

use think\Db;

class Send
{

    public function appendCode($data)
    {
        return Db::table('zq_verify_sms')->insert($data);
    }

    public function getCode($phone)
    {
        return Db::table('zq_verify_sms')->where('mobile = ' . $phone)->find();
    }

}
