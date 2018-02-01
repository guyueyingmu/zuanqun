<?php

// +----------------------------------------------------------------------
// |               isv 解析淘口令
// +----------------------------------------------------------------------
namespace zuanqun\tbk\business;
use zuanqun\tbk\service\ServiceInterface;

class WirelessShareTpwdQuery implements ServiceInterface
{

    //淘口令
    private $_password_content;

    private $_api_params = [];

    public function get_api_params()
    {
        return $this->_api_params;
    }

    public function get_api_method_name()
    {
        return 'taobao.wireless.share.tpwd.query';
    }

    //设置需要解析的淘口令
    public function set_password_content($code)
    {
        $this->_password_content = $code;
        $this->_api_params['password_content'] = $code;
    }

    //获取需要解析的淘口令
    public function get_password_content()
    {
        return $this->_password_content;
    }

}