<?php

// +----------------------------------------------------------------------
// |               好券清单API【导购】
// +----------------------------------------------------------------------

namespace zuanqun\tbk\service;

class TbkDgItemCouponGetService implements ServiceInterface
{

    //mm_xxx_xxx_xxx的第三位
    private $_adzone_id;

    //默认值：1 1：PC，2：无线，默认：1
    private $_platform = '1';

    private $_api_params = [];

    //最大长度：10 后台类目ID，用,分割，最大10个，该ID可以通过taobao.itemcats.get接口获取到
    private $_cat = '';

    //默认值：20 页大小，默认20，1~100
    private $_page_size = '20';

    //查询词
    private $_q = '';

    //第几页，默认：1（当后台类目和查询词均不指定的时候，最多出10000个结果，即page_no*page_size不能超过200；当指定类目或关键词的时候，则最多出100个结果）
    private $_page_no = '1';

    public function get_api_params()
    {
        return $this->_api_params;
    }

    public function get_api_method_name()
    {
        return 'taobao.tbk.dg.item.coupon.get';
    }

    //设置mm_xxx_xxx_xxx的第三位
    public function set_adzone_id($id)
    {
        $this->_adzone_id = $id;
        $this->_api_params['adzone_id'] = $id;
    }

    //获取mm_xxx_xxx_xxx的第三位
    public function get_adzone_id()
    {
        return $this->_adzone_id;
    }

    //设置终端
    public function set_platform($platform)
    {
        $this->_platform = $platform;
        $this->_api_params['platform'] = $platform;
    }

    //获取终端
    public function get_platform()
    {
        return $this->_platform;
    }

    //设置类目
    public function set_cat($cat)
    {
        $this->_cat = $cat;
        $this->_api_params['cat'] = $cat;
    }

    //获取类目
    public function get_cat()
    {
        return $this->_cat;
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

    //设置第几页
    public function set_page_no($no)
    {
        $this->_page_no = $no;
        $this->_api_params['page_no'] = $no;
    }

    //获取第几页
    public function get_page_no()
    {
        return $this->_page_no;
    }

}
