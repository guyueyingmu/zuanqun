<?php

// +----------------------------------------------------------------------
// |               淘宝客商品详情（简版）
// +----------------------------------------------------------------------

namespace zuanqun\tbk\service;

class TbkItemInfoGetService implements ServiceInterface
{

    //需返回的字段列表 num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url
    private $_fields;

    //链接形式：1：PC，2：无线，默认：１
    private $_platform = '1';

    //商品ID串，用,分割，从taobao.tbk.item.get接口获取num_iid字段，最大40个
    private $_num_iids;

    private $_api_params = [];

    public function get_api_params()
    {
        return $this->_api_params;
    }

    public function get_api_method_name()
    {
        return 'taobao.tbk.item.info.get';
    }

    //设置返回字段列表
    public function set_fields($fields)
    {
        $this->_fields = $fields;
    }

    //获取返回字段列表
    public function get_fields()
    {
        return $this->_fields;
    }

    //设置链接形式
    public function set_platform($platform)
    {
        $this->_platform = $platform;
    }

    //获取链接形式
    public function get_platform()
    {
        return $this->_platform;
    }

    //设置商品id串
    public function set_num_iid($ids)
    {
        $this->_num_iids = $ids;
    }

    //获取商品id串
    public function get_num_iid()
    {
        return $this->_num_iids;
    }

}
