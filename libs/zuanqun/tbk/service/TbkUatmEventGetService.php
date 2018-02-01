<?php

// +----------------------------------------------------------------------
// |               枚举正在进行中的定向招商的活动列表
// +----------------------------------------------------------------------

namespace zuanqun\tbk\service;

class TbkUatmEventGetService implements ServiceInterface
{

    //需要返回的字段列表，不能为空，字段名之间使用逗号分隔 event_id,event_title,start_time,end_time
    private $_fields;

    //默认1，第几页，从1开始计数
    private $_page_no = '1';

    //默认20, 页大小，即每一页的活动个数
    private $_page_size = '20';

    private $_api_params = [];

    public function get_api_params()
    {
        return $this->_api_params;
    }

    public function get_api_method_name()
    {
        return 'taobao.tbk.uatm.event.get';
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

    //设置页码
    public function set_page_no($page)
    {
        $this->_page_no = $page;
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
    }

    //获取页大小
    public function get_page_size()
    {
        return $this->_page_size;
    }

}
