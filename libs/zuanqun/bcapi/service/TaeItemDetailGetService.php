<?php

// +----------------------------------------------------------------------
// |               配置类
// +----------------------------------------------------------------------

namespace zuanqun\bcapi\service;

class TaeItemDetailGetService implements ServiceInterface
{

    //区块信息，field 支持 itemInfo,priceInfo,skuInfo,stockInfo,rateInfo,descInfo,sellerInfo,mobileDescInfo,deliveryInfo,storeInfo,itemBuyInfo,couponInfo
    private $_fields;

    //用户所在位置ip
    private $_buyer_ip = '';

    //商品open_iid
    private $_open_iid = '';

    private $_api_params = [];

    public function get_api_params()
    {
        return $this->_api_params;
    }

    public function get_api_method_name()
    {
        return 'taobao.tae.item.detail.get';
    }

    //设置返回字段；列表
    public function set_fields($fields)
    {
        $this->_fields = $fields;
        $this->_api_params['fields'] = $fields;
    }

    //设置用户所在ip
    public function set_buyer_ip($ip)
    {
        $this->_buyer_ip = $ip;
        $this->_api_params['buyer_ip'] = $ip;
    }

    //设置商品open_iid
    public function set_open_iid($id)
    {
        $this->_open_iid = $id;
        $this->_api_params['open_iid'] = $id;
    }


    /////////获取参数///////////

    //获取返回字段；列表
    public function get_fields()
    {
        return $this->_fields;
    }

    //获取用户所在ip
    public function get_buyer_ip()
    {
        return $this->_buyer_ip;
    }

    //获取商品open_iid
    public function get_open_iid()
    {
        return $this->_open_iid;
    }

}
