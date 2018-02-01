<?php

// +----------------------------------------------------------------------
// |               物料传播方式获取
// +----------------------------------------------------------------------

namespace zuanqun\tbk\service;

class TbkSpreadGetService implements ServiceInterface
{

    //请求列表，内部包含多个url
    private $_requests;

    private $_api_params = [];

    public function get_api_params()
    {
        return $this->_api_params;
    }

    public function get_api_method_name()
    {
        return 'taobao.tbk.spread.get';
    }

    //设置请求参数
    public function set_request($request)
    {
        $this->_requests = $request;
        $this->_api_params["requests"] = $request;
    }

    //获取request
    public function get_request()
    {
        return $this->_requests;
    }

}
