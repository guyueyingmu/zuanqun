<?php

namespace app\user\controller;
use app\auth\controller\AppKeyAuth;
use think\Loader;
use think\Session;

class AppKey
{

    //appkey管理界面
    public function manage()
    {
        return view('default/app_key/manage',[
            'appkey' => $this->getAppKeyInfo(),
        ]);
    }

    //获取用户appkey信息
    public function getAppKeyInfo()
    {
        return Loader::model('AppKeyInfo')->getUserAppKey(Session::get('uid'));
    }

    //appkey申请
    static public function applyKey($id)
    {
        return AppKeyAuth::create($id);
    }

}
