<?php

namespace liugene\alitool\service;

class KeyWordService implements ToolServiceInterface
{

    //请求地址
    private $url = 'http://pub.alimama.com/items/search.json';

    //查询关键词
    private $q;

    //要查询的分页页码，没填默认为1
    private $toPage;

    //该值为1，表示只查询天猫旗舰店商品
    private $b2c;

    //该值为1，表示只查询有店铺优惠券的商品
    private $dpyhq;

    //该值为1，表示只查询定向优惠的商品
    private $dxjh;

    //该值为1，表示只查询天猫的商品
    private $tmall;

    //该值为1，表示只查询包邮的商品
    private $freeShipment;

    //该值为2，表示按人气排序，默认为空，其他排序请将该值设置为0
    private $queryType;

    //排序方式，1：收入比率从高到低，3：价格从高到低，4：价格从低到高，5：月推广量从高到低，7：  月支出佣金从高到低
    private $sortType;

    //月销量在某个数值以上
    private $startBiz30day;

    //查询价格起始区间
    private $startPrice;

    //查询价格结束区间
    private $endPrice;

    private $param = [];

    public function getParams()
    {
        return $this->param;
    }

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    public function setQ($q)
    {
        $this->q = $q;
        $this->param['q'] = $q;
        return $this;
    }

    public function setToPage($page)
    {
        $this->toPage = $page;
        $this->param['toPage'] = $page;
        return$this;
    }

    public function setB2C($type)
    {
        $this->b2c = $type;
        $this->param['b2c'] = $type;
        return $this;
    }

    public function setDpYhq($type)
    {
        $this->dpyhq = $type;
        $this->param['dpyhq'] = $type;
        return $this;
    }

    public function setDxjh($type)
    {
        $this->dxjh = $type;
        $this->param['dxjh'] = $type;
        return $this;
    }

    public function setTmall($type)
    {
        $this->tmall = $type;
        $this->param['tmall'] = $type;
        return $this;
    }

    public function setFreeShipment($type)
    {
        $this->freeShipment = $type;
        $this->param['freeShipment'] = $type;
        return $this;
    }

    public function setQueryType($type)
    {
        $this->queryType = $type;
        $this->param['queryType'] = $type;
        return $this;
    }

    public function setSortType($type)
    {
        $this->sortType = $type;
        $this->param['sortType'] = $type;
        return $this;
    }

    public function setStartBiz30Day($mount)
    {
        $this->startBiz30day = $mount;
        $this->param['startBiz30day'] = $mount;
        return $this;
    }

    public function setStartPrice($price)
    {
        $this->startPrice = $price;
        $this->param['startPrice'] = $price;
        return $this;
    }

    public function setEndPrice($price)
    {
        $this->endPrice = $price;
        $this->param['endPrice'] = $price;
        return $this;
    }


    ///////////////////获取服务配置/////////////////////

    public function getUrl()
    {
        return $this->url;
    }

    public function getQ()
    {
        return $this->q;
    }

    public function getToPage()
    {
        return $this->toPage;
    }

    public function getB2C()
    {
        return $this->b2c;
    }

    public function getDpYhq()
    {
        return $this->dpyhq;
    }

    public function getDxjh()
    {
        return $this->dxjh;
    }

    public function getTmall()
    {
        return $this->tmall;
    }

    public function getFreeShipment()
    {
        return $this->freeShipment;
    }

    public function getQueryType()
    {
        return $this->queryType;
    }

    public function getSortType()
    {
        return $this->sortType;
    }

    public function getStartBiz30Day()
    {
        return $this->startBiz30day;
    }

    public function getStartPrice()
    {
        return $this->startPrice;
    }

    public function getEndPrice()
    {
        return $this->endPrice;
    }

    public function getClassName()
    {
        return __CLASS__;
    }

}