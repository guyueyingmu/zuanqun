<?php

namespace liugene\alisms\service;

class SmsSend implements ServiceInterface
{
    /**
     * 接受信息手机号码
     * @var string $phone_numbers
     */
    private $phone_numbers;

    /**
     * 阿里提供的短信签名
     * @var string $sign_name
     */
    private $sign_name;

    /**
     * 阿里后台提供的短信模板code
     * @var string $template_code
     */
    private $template_code;

    /**
     * 阿里后台设置的短信中对于的模板参数 json格式
     */
    private $template_param;

    /**
     *
     */
    private $out_id;

    /**
     * 发送方法默认不用修改
     */
    private $action = 'SendSms';

    /**
     * 短信版本
     */
    private $version = '2017-05-25';

    /**
     *
     */
    private $region_id = 'cn-hangzhou';

    private $api_param = [
        'Action' => 'SendSms',
        'Version' => '2017-05-25',
        'RegionId' => 'cn-hangzhou'
    ];


    public function setPhoneNumbers($phone)
    {
        $this->phone_numbers = $phone;
        $this->api_param['PhoneNumbers'] = $phone;
        return $this;
    }

    public function setSignName($name)
    {
        $this->sign_name = $name;
        $this->api_param['SignName'] = $name;
        return $this;
    }

    public function setTemplateCode($code)
    {
        $this->template_code = $code;
        $this->api_param['TemplateCode'] = $code;
        return $this;
    }

    public function setTemplateParam($param)
    {
        $this->template_param = $param;
        $this->api_param['TemplateParam'] = $param;
        return $this;
    }

    public function setOutId($id)
    {
        $this->out_id = $id;
        $this->api_param['OutId'] = $id;
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


    /////获取参数/////////


    public function getPhoneNumbers()
    {
        return $this->phone_numbers;
    }

    public function getSignName()
    {
        return $this->sign_name;
    }

    public function getTemplateCode()
    {
        return $this->template_code;
    }

    public function getTemplateParam()
    {
        return $this->template_param;
    }

    public function getOutId()
    {
        return $this->out_id;
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