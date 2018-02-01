<?php

namespace liugene\alitool\service;

class GetAuctionCodeService implements ToolServiceInterface
{

    private $url = 'http://pub.alimama.com/common/code/getAuctionCode.json';

    //要转换的商品Id
    private $auctionid;

    //推广站点id
    private $siteid;

    //推广位id
    private $adzoneid;

    //设置为1固定值，含义未知
    private $scenes;

    //时间戳
    private $t;

    private $param = [];

    public function getParams()
    {
        return $this->param;
    }

    public function setUrl($url)
    {
        $this->url = $url;
        $this->param['url'] = $url;
        return $this;
    }

    public function setAuctionId($auctionid)
    {
        $this->auctionid = $auctionid;
        $this->param['auctionid'] = $auctionid;
        return $this;
    }

    public function setSiteId($siteid)
    {
        $this->siteid = $siteid;
        $this->param['siteid'] = $siteid;
        return $this;
    }

    public function setAdzoneId($adzoneid)
    {
        $this->adzoneid = $adzoneid;
        $this->param['adzoneid'] = $adzoneid;
        return $this;
    }

    public function setT($t)
    {
        $this->t = $t;
        $this->param['t'] = $t;
        return $this;
    }


    ///////////////////获取服务配置//////////////////


    public function getUrl()
    {
        return $this->url;
    }

    public function getAuctionId()
    {
        return $this->auctionid;
    }

    public function getSiteId()
    {
        return $this->siteid;
    }

    public function getAdzoneId()
    {
        return $this->adzoneid;
    }

    public function getT()
    {
        return $this->t;
    }

    public function getClassName()
    {
        return __CLASS__;
    }

}