<?php

// +----------------------------------------------------------------------
// |               聚划算商品搜索接口
// +----------------------------------------------------------------------

namespace zuanqun\tbk\service;

class JuItemsSearchService implements ServiceInterface
{

    private $_param_top_item_query;

    private $_api_params = [];

    public function get_api_params()
    {
        return $this->_api_params;
    }

    public function get_api_method_name()
    {
        return 'taobao.ju.items.search';
    }

    //设置查询参数
    public function set_param_top_item_query($query)
    {
        $this->_param_top_item_query = $query;
        $this->_api_params['param_top_item_query'] = $query;
    }

    //获取查询参数
    public function get_param_top_item_query()
    {
        return $this->_param_top_item_query;
    }

}
