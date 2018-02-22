<?php

namespace app\open\controller;

class Tool
{

    //二合一转链页面
    public function toUland()
    {
        return view('default/tool/index');
    }

    //二合一解密
    public function deCodeUland()
    {
        return view('default/tool/deuland');
    }

    //淘宝客转链
    public function tbkTranLinks()
    {
        return view('default/tool/tbktran');
    }

}
