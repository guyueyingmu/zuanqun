<?php

namespace liugene\alitool\service;

class ToUlandService implements ToolServiceInterface
{

    //二合一转链URL
    private $url = 'https://uland.taobao.com/coupon/edetail';

    //优惠券id
    private $activityId;

    //阿里妈妈pid
    private $pid;

    //商品id
    private $itemId;


    /*
     * 佣金类型
     * dx = 0 鹊桥高佣金 》定向计划 》通用佣金
     * dx =1 定向计划》鹊桥高佣金 》 通用佣金
     *
     * 当佣金类型为营销计划的时候，就不能用dx参数了
     * 需要使用 mt = 1 来替换dx
     * mt =1
     * 营销计划》鹊桥高佣金 》定向计划 》通用佣金
     * */
    private $dx = 0;

    private $param = [];


    /////设置参数//////

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    public function setActivityId($activityId)
    {
        $this->activityId = $activityId;
        $this->param['activityId'] = $activityId;
        return $this;
    }

    public function setPid($pid)
    {
        $this->pid = $pid;
        $this->param['pid'] = $pid;
        return $this;
    }

    public function setItemId($id)
    {
        $this->itemId = $id;
        $this->param['itemId'] = $id;
        return $this;
    }

    public function setDx($type)
    {
        $this->dx = $type;
        $this->param['dx'] = $type;
        return $this;
    }

    /////获取参数//////

    public function getActivityId()
    {
        return $this->activityId;
    }

    public function getPid()
    {
        return $this->pid;
    }

    public function getItemId()
    {
        return $this->itemId;
    }

    public function getDx()
    {
        return $this->dx;
    }

    public function getParams()
    {
        return $this->param;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getClassName()
    {
        return __CLASS__;
    }

}