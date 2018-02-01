<?php

// +----------------------------------------------------------------------
// |               淘宝客店铺关联推荐查询
// +----------------------------------------------------------------------

namespace zuanqun\tbk\service;

class TbkShopRecommendGetService implements ServiceInterface
{

    //需返回的字段列表 user_id,shop_title,shop_type,seller_nick,pict_url,shop_url
    private $_fields;

    //卖家Id
    private $_user_id;

    //返回数量，默认20，最大值40
    private $_count = '20';

    //链接形式：1：PC，2：无线，默认：１
    private $_platform = '1';

    private $_api_params = [];

    public function get_api_params()
    {
        return $this->_api_params;
    }

    public function get_api_method_name()
    {
        return 'taobao.tbk.shop.recommend.get';
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

    //设置数量
    public function set_count($count)
    {
        $this->_count = $count;
    }

    //获取数量
    public function get_count()
    {
        return $this->_count;
    }

    //设置卖家 id
    public function set_user_id($id)
    {
        $this->_user_id = $id;
    }

    //获取卖家 id
    public function get_user_id()
    {
        return $this->_user_id;
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

}
