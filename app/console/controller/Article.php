<?php

namespace app\console\controller;
use liugene\linkrest\Restful;
use app\console\container\Doc;
use app\console\logic\ApiDoc;
use app\console\logic\HelpDoc;
use app\console\logic\NoticeDoc;
use app\console\model\ApiDoc as ApiModel;
use app\console\model\HelpDoc as HelpModel;
use app\console\model\NoticeDoc as NoticeModel;

class Article
{

    //通过私有属性保存具体别名
    private $alias;

    public function __construct()
    {
        if(is_null(input('type'))){
            Restful::request()
                ->setData(['code' => 301, 'msg' => '操作非法!', 'data' => []])
                ->send();
        }
        $this->alias = input('type');
        switch($this->alias){
            case 'api':
                Doc::getInstance()->set('api',function(){
                    $api = new ApiDoc();
                    $api->set('api',function(){
                        return new ApiModel();
                    });
                    return $api;
                });
                break;
            case 'help':
                Doc::getInstance()->set('help',function(){
                    $help = new HelpDoc();
                    $help->set('help',function(){
                        return new HelpModel();
                    });
                    return $help;
                });
                break;
            case 'notice':
                Doc::getInstance()->set('notice',function(){
                    $notice = new NoticeDoc();
                    $notice->set('notice',function(){
                        return new NoticeModel();
                    });
                    return $notice;
                });
                break;
        }
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
            ->get($this->alias)
            ->select();
        Restful::request()
            ->setData($data)
            ->send();
    }

    private function addDoc()
    {
        $data = Doc::getInstance()
            ->get($this->alias)
            ->put();
        Restful::request()
            ->setData(['code' => 1, 'msg' => $data])
            ->send();
    }

}