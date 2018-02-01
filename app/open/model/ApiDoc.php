<?php

namespace app\open\model;
use think\Db;

class ApiDoc
{

    public function getDoc()
    {
        return Db::table('zq_apidoc')->find();
    }

}
