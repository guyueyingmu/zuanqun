<?php

// +----------------------------------------------------------------------
// |               百川商品列表服务
// +----------------------------------------------------------------------

namespace zuanqun\bcapi\service;

class TaeItemsListService implements ServiceInterface
{

    //返回值中需要的字段. 可选值 title,nick,pic_url,location,cid,price,post_fee,promoted_service,ju,shop_name字段间用 (,) 逗号分隔
    private $_fields;

    //商品ID，英文逗号(,)分隔，最多50个。优先级低于open_iid，open_iids存在的话，则忽略本参数
    private $_num_iids = '';

    //商品混淆ID，英文逗号(,)分隔，最多50个。优先级高于open_iid，本参数存在的话，则忽略num_iids
    private $_open_iids = '';

    private $_api_params = [];

    public function get_api_params()
    {
        return $this->_api_params;
    }

    public function get_api_method_name()
    {
        return 'taobao.tae.items.list';
    }

    //设置返回字段
    public function set_fields($fields)
    {
        $this->_fields = $fields;
        $this->_api_params['fields'] = $fields;
    }

    //设置商品id
    public function set_num_iids($id)
    {
        $this->_num_iids = $id;
        $this->_api_params['num_iids'] = $id;
    }

    //设置商品混淆id
    public function set_open_iids($id)
    {
        $this->_open_iids = $id;
        $this->_api_params['open_iids'] = $id;
    }

    //////////获取参数//////////


    //设置返回字段
    public function get_fields()
    {
        return $this->_fields;
    }

    //设置商品id
    public function get_num_iids()
    {
        return $this->_num_iids;
    }

    //设置商品混淆id
    public function get_open_iids()
    {
        return $this->_open_iids;
    }

}
