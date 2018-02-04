<?php

namespace app\open\controller;
use app\open\container\Doc;
use app\open\logic\ApiDoc;
use app\open\model\ApiDoc as ApiModel;

class Wiki
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

    public function webWiki()
    {
        return view('default/wiki/web_wiki');
    }

    public function apiInfo()
    {
        return view('default/wiki/apiinfo',[
            'res' => Doc::getInstance()
                ->get('api')
                ->select()
        ]);
    }

}