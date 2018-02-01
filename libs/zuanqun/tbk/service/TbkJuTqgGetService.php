<?php

// +----------------------------------------------------------------------
// |               淘抢购api
// +----------------------------------------------------------------------

namespace zuanqun\tbk\service;

class TbkJuTqgGetService implements ServiceInterface
{

    //需返回的字段列表 click_url,pic_url,reserve_price,zk_final_price,
    //total_amount,sold_num,title,category_name,start_time,end_time
    private $_fields;

    //推广位id（推广位申请方式：http://club.alimama.com/read.php?spm=0.0.0.0.npQdST&tid=6306396&ds=1&page=1&toread=1）
    private $_adzone_id;

    //最早开团时间
    private $_start_time;

    //最晚开团时间
    private $_end_time;

    //第几页，默认1，1~100
    private $_page_no = '1';

    //页大小，默认40，1~40
    private $_page_size = '40';

    private $_api_params = [];

    public function get_api_params()
    {
        return $this->_api_params;
    }

    public function get_api_method_name()
    {
        return 'taobao.tbk.ju.tqg.get';
    }

    //设置字段返回列表
    public function set_fields($fields)
    {
        $this->_fields = $fields;
    }

    //设置推广位id
    public function set_adzone_id($id)
    {
        $this->_adzone_id = $id;
    }

    //设置最早开团时间
    public function set_start_time($time)
    {
        $this->_start_time = $time;
    }

    //设置最晚开团时间
    public function set_end_time($time)
    {
        $this->_end_time = $time;
    }

    //设置页码
    public function set_page_no($page)
    {
        $this->_page_no = $page;
    }

    //设置页大小
    public function set_page_size($size)
    {
        $this->_page_size = $size;
    }

    //获取字段返回列表
    public function get_fields()
    {
        return $this->_fields;
    }

    //获取推广位id
    public function get_adzone_id()
    {
        return $this->_adzone_id;
    }

    //获取最早开团时间
    public function get_start_time()
    {
        return $this->_start_time;
    }

    //获取最晚开团时间
    public function get_end_time()
    {
        return $this->_end_time;
    }

    //获取页码
    public function get_page_no()
    {
        return $this->_page_no;
    }

    //获取页大小
    public function get_page_size()
    {
        return $this->_page_size;
    }

}
