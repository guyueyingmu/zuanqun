<?php

// +----------------------------------------------------------------------
// | 淘宝客商品查询
// +----------------------------------------------------------------------
namespace zuanqun\tbk\service;

class TbkItemGetService implements  ServiceInterface
{

    //需返回的字段列表 num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick
    private $_fields;

    //查询词
    private $_q = '';

    //后台类目ID，用,分割，最大10个
    private $_cat = '';

    //所在地
    private $_itemloc;

    //排序_des（降序），排序_asc（升序），销量（total_sales），淘客佣金比率（tk_rate）， 累计推广量（tk_total_sales），总支出佣金（tk_total_commi）
    private $_sort;

    //是否商城商品，设置为true表示该商品是属于淘宝商城商品，设置为false或不设置表示不判断这个属性
    private $_is_tmall;

    //是否海外商品，设置为true表示该商品是属于海外商品，设置为false或不设置表示不判断这个属性
    private $_is_overseas;

    //折扣价范围下限，单位：元
    private $_start_price;

    //折扣价范围上限，单位：元
    private $_end_price;

    //淘客佣金比率上限，如：1234表示12.34%
    private $_start_tk_rate;

    //淘客佣金比率下限，如：1234表示12.34%
    private $_end_tk_rate;

    //链接形式：1：PC，2：无线，默认：１
    private $_platform = '1';

    //第几页，默认：１
    private $_page_no = '1';

    //默认值：0页大小，默认20，1~100
    private $_page_size = '20';

    private $_api_params = [];

    //获取业务API参数
    public function get_api_params()
    {
        return $this->_api_params;
    }

    //设置字段列表
    public function set_fields($fields)
    {
        $this->_fields = $fields;
        $this->_api_params['fields'] = $fields;
    }

    //获取字段列表
    public function get_fields()
    {
        return $this->_fields;
    }

    //设置查询词
    public function set_q($q)
    {
        $this->_q = $q;
        $this->_api_params['q'] = $q;
    }

    //获取查询词
    public function get_q()
    {
        return $this->_q;
    }

    //设置类目id
    public function set_cat($cat)
    {
        $this->_cat = $cat;
        $this->_api_params['cat'] = $cat;
    }

    //获取类目id
    public function get_cat()
    {
        return $this->_cat;
    }

    //设置所在地
    public function set_itemloc($itemloc)
    {
        $this->_itemloc = $itemloc;
        $this->_api_params['itemloc'] = $itemloc;
    }

    //获取所在地
    public function get_itemloc()
    {
        return $this->_itemloc;
    }

    //设置排序
    public function set_sort($sort)
    {
        $this->_sort = $sort;
        $this->_api_params['sort'] = $sort;
    }

    //获取排序
    public function get_sort()
    {
        return $this->_sort;
    }

    //设置是否商城
    public function set_is_tmall($is_tmall)
    {
        $this->_is_tmall = $is_tmall;
        $this->_api_params['is_tmall'] = $is_tmall;
    }

    //获取是否商城
    public function get_is_tmall()
    {
        return $this->_is_tmall;
    }

    //设置是否海外商品
    public function set_is_overseas($is_overseas)
    {
        $this->_is_overseas = $is_overseas;
        $this->_api_params['is_overseas'] = $is_overseas;
    }

    //获取是否海外商品
    public function get_is_overseas()
    {
        return $this->_is_overseas;
    }

    //设置折扣价范围下限
    public function set_start_price($price)
    {
        $this->_start_price = $price;
        $this->_api_params['start_price'] = $price;
    }

    //获取折扣价范围下限
    public function get_start_price()
    {
        return $this->_start_price;
    }

    //设置折扣价范围上限
    public function set_end_price($price)
    {
        $this->_end_price = $price;
        $this->_api_params['end_price'] = $price;
    }

    //获取折扣价范围上限
    public function get_end_price()
    {
        return $this->_end_price;
    }

    //设置淘客佣金比例上限
    public function set_start_tk_rate($rate)
    {
        $this->_start_tk_rate = $rate;
        $this->_api_params['start_tk_rate'] = $rate;
    }

    //获取淘客佣金比例上限
    public function get_start_tk_rate()
    {
        return $this->_start_tk_rate;
    }

    //设置淘客佣金下限
    public function set_end_tk_rate($rate)
    {
        $this->_end_tk_rate = $rate;
        $this->_api_params['end_tk_rate'] = $rate;
    }

    //获取淘客佣金下限
    public function get_end_tk_rate()
    {
        return $this->_end_tk_rate;
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

    //设置页数
    public function set_page_no($page)
    {
        $this->_page_no = $page;
        $this->_api_params['page_no'] = $page;
    }

    //获取页数
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

    //获取api方法
    public function get_api_method_name()
    {
        return "taobao.tbk.item.get";
    }
}
