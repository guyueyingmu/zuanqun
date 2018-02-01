<?php

namespace liugene\alitool\service;

class GetCouponService implements ToolServiceInterface
{

    private $url = 'http://uland.taobao.com/cp/coupon_list';

    private $pid;

    //这个参数是一个数组，表示类目id，逗号分隔，类目id
    private $category;

    //返回结果的数量，该接口不支持分页
    private $queryCount;

    private $param = [];

    public function setUrl($url)
    {
        $this->url = $url;
        $this->param['url'] = $url;
        return $url;
    }

    public function setPid($pid)
    {
        $this->pid = $pid;
        $this->param['pid'] = $pid;
        return $this;
    }

    public function setCategory($category)
    {
        $this->category = $category;
        $this->param['category'] = $category;
        return $this;
    }

    public function setQueryCount($queryCount)
    {
        $this->queryCount = $queryCount;
        $this->param['queryCount'] = $queryCount;
        return $this;
    }

    /////////////获取服务配置////////////////

    public function getParams()
    {
        return $this->param;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getPid()
    {
        return $this->pid;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getQueryCount()
    {
        return $this->queryCount;
    }

    public function getClassName()
    {
        return __CLASS__;
    }

}