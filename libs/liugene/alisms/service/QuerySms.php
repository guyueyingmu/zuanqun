<?php

namespace liugene\alisms\service;

class QuerySms implements ServiceInterface
{

    private $phone_number;

    private $biz_id;

    private $send_date;

    private $page_size;

    private $current_page;

    /**
     * 发送方法默认不用修改
     */
    private $action = 'QuerySendDetails';

    /**
     * 短信版本
     */
    private $version = '2017-05-25';

    /**
     *
     */
    private $region_id = 'cn-hangzhou';

    private $api_param = [
        'Action' => 'QuerySendDetails',
        'Version' => '2017-05-25',
        'RegionId' => 'cn-hangzhou'
    ];

    public function setPhoneNumber($phone)
    {
        $this->phone_number = $phone;
        $this->api_param['PhoneNumber'] = $phone;
        return $this;
    }

    public function setBizId($id)
    {
        $this->biz_id = $id;
        $this->api_param['BizId'] = $id;
        return $this;
    }

    public function setSendDate($date)
    {
        $this->send_date = $date;
        $this->api_param['SendDate'] = $date;
        return $this;
    }

    public function setPageSize($page)
    {
        $this->page_size = $page;
        $this->api_param['PageSize'] = $page;
        return $this;
    }

    public function setCurrentPage($page)
    {
        $this->current_page = $page;
        $this->api_param['CurrentPage'] = $page;
        return $this;
    }

    public function setAction($action)
    {
        $this->action = $action;
        $this->api_param['Action'] = $action;
        return $this;
    }

    public function setVersion($version)
    {
        $this->version = $version;
        $this->api_param['Version'] = $version;
        return $this;
    }

    public function setRegionId($id)
    {
        $this->region_id = $id;
        return $this;
    }


    ///////获取参数////////


    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    public function getBizId()
    {
        return $this->biz_id;
    }

    public function getSendDate()
    {
        return $this->send_date;
    }

    public function getPageSize()
    {
        return $this->page_size;
    }

    public function getCurrentPage()
    {
        return $this->current_page;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function getRegionId()
    {
        return $this->region_id;
    }

    public function get_api_param()
    {
        return $this->api_param;
    }

}