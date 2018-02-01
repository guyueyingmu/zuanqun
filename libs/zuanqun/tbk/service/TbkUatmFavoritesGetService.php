<?php

// +----------------------------------------------------------------------
// |               获取淘宝联盟选品库列表
// +----------------------------------------------------------------------

namespace zuanqun\tbk\service;

class TbkUatmFavoritesGetService implements ServiceInterface
{

    //需要返回的字段列表，不能为空，字段名之间使用逗号分隔 favorites_title,favorites_id,type
    private $_fields;

    //第几页，从1开始计数
    private $_page_no = '1';

    //默认20，页大小，即每一页的活动个数
    private $_page_size = '20';

    //默认值-1；选品库类型，1：普通选品组，2：高佣选品组，-1，同时输出所有类型的选品组
    private $_type = '-1';

    private $_api_params = [];

    public function get_api_params()
    {
        return $this->_api_params;
    }

    public function get_api_method_name()
    {
        return 'taobao.tbk.uatm.favorites.get';
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

    //设置页码
    public function set_page_no($page)
    {
        $this->_page_no = $page;
        $this->_api_params['page_no'] = $page;
    }

    //获取页码
    public function get_page_no()
    {
        return $this->_page_no;
    }

    //设置页大小
    public function set_page_size($size)
    {
        $this->_page_size = $size;
        $this->_api_params['page_size'] = $size;
    }

    //获取页大小
    public function get_page_size()
    {
        return $this->_page_size;
    }

    //设置选品库类型
    public function set_type($type)
    {
        $this->_type = $type;
        $this->_api_params['type'] = $type;
    }

    //获取选品库类型
    public function get_type()
    {
        return $this->_type;
    }

}
