<?php

namespace app\user\controller;

class CmsBase
{

    //cms设置首页
    public function index()
    {
        return view('default/cms_base/index');
    }

}