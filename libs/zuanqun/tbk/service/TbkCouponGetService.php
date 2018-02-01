<?php

// +----------------------------------------------------------------------
// |               阿里妈妈推广券信息查询
// +----------------------------------------------------------------------

namespace zuanqun\tbk\service;

class TbkCouponGetService implements ServiceInterface
{

    //带券ID与商品ID的加密串
    private $_me;

    private $_api_params = [];

    public function get_api_params()
    {
        return $this->_api_params;
    }

    public function get_api_method_name()
    {
        return 'taobao.tbk.coupon.get';
    }

    //设置带券ID与商品ID的加密串
    public function set_me($me)
    {
        $this->_me = $me;
        $this->_api_params['me'] = $me;
    }

    //获取带券ID与商品ID的加密串
    public function get_me()
    {
        return $this->_me;
    }

}
