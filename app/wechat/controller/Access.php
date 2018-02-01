<?php

namespace app\wechat\controller;
use liugene\wechat\WeChat;

class Access
{

    public function token()
    {
        WeChat::getInstance()
            ->set_appid('wx46d23e2a9276c584')
            ->set_secret('b358a4e40ca43946ed2b84f9b7b23e62')
            ->setService('WxServerIpGetService');
        dump(WeChat::getInstance()->execute());
    }

    public function login()
    {
        dump(WeChat::getInstance()->setService('WxCodeGetService')
            ->set_appid('wx46d23e2a9276c584')
            ->set_redirect_uri('https://opens.wang')
            ->set_scope('snsapi_base')
            ->set_state('STATE')
        );
        dump(WeChat::getInstance()->getCode());
    }

}
