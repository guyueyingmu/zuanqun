<?php

// +----------------------------------------------------------------------
// |               获取淘宝联盟选品库的宝贝信息
// +----------------------------------------------------------------------

namespace zuanqun\tbk\service;

class TbkUatmFavoritesItemGetService implements ServiceInterface
{

    //需要输出则字段列表，逗号分隔  num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,
    //item_url,seller_id,volume,nick,shop_title,zk_final_price_wap,event_start_time,event_end_time,tk_rate,status,type
    private $_fields;

    //链接形式：1：PC，2：无线，默认：１
    private $_platform = '1';

    //页大小，默认20，1~100
    private $_page_size = '20';

    //推广位id，需要在淘宝联盟后台创建；且属于appkey备案的媒体id（siteid），如何获取adzoneid，
    //请参考，http://club.alimama.com/read-htm-tid-6333967.html?spm=0.0.0.0.msZnx5
    private $_adzone_id;

    //自定义输入串，英文和数字组成，长度不能大于12个字符，区分不同的推广渠道
    private $_unid;

    //选品库的id
    private $_favorites_id;

    //第几页，默认：1，从1开始计数
    private $_page_no;

    private $_api_params = [];

    public function get_api_params()
    {
        return $this->_api_params;
    }

    public function get_api_method_name()
    {
        return 'taobao.tbk.uatm.favorites.item.get';
    }

    //设置返回字段
    public function set_fields($fields)
    {
        $this->_fields = $fields;
        $this->_api_params['fields'] = $fields;
    }

    //获取返回字段
    public function get_fields()
    {
        return $this->_fields;
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

    //设置推广位id
    public function set_adzone_id($id)
    {
        $this->_adzone_id = $id;
        $this->_api_params['adzone_id'] = $id;
    }

    //获取推广位id
    public function get_adzone_id()
    {
        return $this->_adzone_id;
    }

    //设置自定义输入串
    public function set_unid($id)
    {
        $this->_unid = $id;
        $this->_api_params['unid'] = $id;
    }

    //获取自定义输入串
    public function get_unid()
    {
        return $this->_unid;
    }

    //设置选品库id
    public function set_favorites_id($id)
    {
        $this->_favorites_id = $id;
        $this->_api_params['favorites_id'] = $id;
    }

    //获取选品库id
    public function get_favorites_id()
    {
        return $this->_favorites_id;
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

}
