<?php

// +----------------------------------------------------------------------
// |               isv生成淘口令
// +----------------------------------------------------------------------

namespace zuanqun\tbk\business;
use zuanqun\tbk\service\ServiceInterface;

class WirelessShareTpwdCreate implements ServiceInterface
{

    //口令参数
    private $_tpwd_param;

    private $_api_params = [];

    public function get_api_params()
    {
        return $this->_api_params;
    }

    public function get_api_method_name()
    {
        return 'taobao.wireless.share.tpwd.create';
    }

    //设置isv生成淘口令参数
    public function set_tpwd_param($param)
    {
        $this->_tpwd_param = $param;
        $this->_api_params['tpwd_param'] = $param;
    }

    //获取isv生成淘口令参数
    public function get_tpwd_param()
    {
        return $this->_tpwd_param;
    }

}