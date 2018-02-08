<?php

namespace app\goods\logic;

use app\goods\base\Logic;

class GetGoods extends Logic
{

    public function getGoods()
    {
        /**
         * 排序方式
         */
        $order = is_null(input('sort')) ? 'id desc' : input('sort') . " desc";
        $where = '1=1';
        /**
         * 销量
         */
        $where .= is_null(input('volume')) ? '' : " and volume >= " . input('volume');
        /**
         * 价格
         */
        $where .= (is_null(input('s_price')) || is_null(input('e_price'))) ? '' : " and zk_final_price between " . input('s_price') . " and " . input('e_price');
        return $this->get('getGoods')->getGoodsInfo($where,$order);
    }

    public function getGoodsCats()
    {
        return $this->get('getGoods')->getGoodsCatsInfo();
    }

    public function countGoods()
    {
        return $this->get('getGoods')->countGoodsInfo();
    }

}
