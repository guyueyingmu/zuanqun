<?php

// +----------------------------------------------------------------------
// |               淘宝客商品关联推荐查询
// +----------------------------------------------------------------------
namespace zuanqun\tbk\service;

class TbkItemRecommendGetService implements ServiceInterface
{

    //需返回的字段列表 num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url
    private $_fields;

    //商品Id
    private $_num_iid;

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
        return 'taobao.tbk.item.recommend.get';
    }

    //设置返回字段列表
    public function set_fields($fields)
    {
        $this->_fields = $fields;
        $this->_api_params['fields'] = $fields;
    }

    //获取返回字段列表
    public function get_fields()
    {
        return $this->_fields;
    }

    //设置商品id
    public function set_num_iid($id)
    {
        $this->_num_iid = $id;
        $this->_api_params['num_iid'] = $id;
    }

    //获取商品id
    public function get_num_iid()
    {
        return $this->_num_iid;
    }

    //设置数量
    public function set_count($count)
    {
        $this->_count = $count;
        $this->_api_params['count'] = $count;
    }

    //获取数量
    public function get_count()
    {
        return $this->_count;
    }

    //设置链接形式
    public function set_platform($platform)
    {
        $this->_platform = $platform;
        $this->_api_params['platform'] = $platform;
    }

    //获取链接形式
    public function get_platform()
    {
        return $this->_platform;
    }

}

