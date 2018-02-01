<?php

namespace app\console\controller;

class ArticleTemp
{

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
