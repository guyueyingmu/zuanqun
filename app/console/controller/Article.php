<?php

namespace app\console\controller;
use app\console\logic\ApiDoc;
use app\console\container\Doc;
use app\console\model\ApiDoc as ApiModel;
use liugene\linkrest\Restful;

class Article
{

    public function __construct()
    {
        Doc::getInstance()->set('api',function(){
            $api = new ApiDoc();
            $api->set('api',function(){
                return new ApiModel();
            });
            return $api;
        });
    }

    public function doc()
    {
        switch(Restful::request()->getRequestMethod()){
            case 'get':
                $this->getDoc();
                break;
            case 'post':
                $this->addDoc();
                break;
            default :
                Restful::request()
                    ->setData(['code' => 301, 'msg' => '操作非法!', 'data' => []])
                    ->send();
        }
    }

    private function getDoc()
    {
        $data = Doc::getInstance()
            ->get('api')
            ->select();
        Restful::request()
            ->setData($data)
            ->send();
    }

    private function addDoc()
    {
        $data = Doc::getInstance()
            ->get('api')
            ->put();
        Restful::request()
            ->setData(['code' => 1, 'msg' => $data])
            ->send();
    }

    //api文档页面
    public function apiDoc()
    {
        return view('default/article/apidoc');
    }

    //帮助文档页面
    public function helpDoc()
    {
        return view('default/article/helpdoc');
    }

    //公告文档页面
    public function noticeDoc()
    {
        return view('default/article/noticedoc');
    }

}