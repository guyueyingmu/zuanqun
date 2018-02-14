<?php

namespace app\download\controller;

use app\download\model\App;
use auth\center\GetUser;

class Index
{

    public function index()
    {
        $file = ROOT_PATH . "web/cms.php";
        $index = ROOT_PATH . "web/download/index.php";
        $fileName = basename($index);  //获取文件名
        $f = file_get_contents($file);
        $user = (new GetUser())->get();
        $app = (new App())->getAppInfo(22);
        $f = preg_replace("/{{app_id}}/",$app['app_id'],$f);
        $f = preg_replace("/{{app_key}}/",$app['app_key'],$f);
//        fopen($index, 'r+');//打开文件
        header("Content-Type:application/octet-stream");
        header("Content-Disposition:attachment;filename=".$fileName);
        header("Accept-ranges:bytes");
        header("Accept-Length:".filesize($file));
        echo $f;
//        fclose($h);
    }

}