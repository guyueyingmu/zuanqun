<?php

// +----------------------------------------------------------------------
// |               优惠券商品查询接口
// +----------------------------------------------------------------------

namespace liugene\jos\jdunion\service;

class JdUnionQueryCouponGoodsService implements ServiceInterface
{

    //页码
    private $pageIndex;

    //每页数量
    private $pageSize;

    //三级类目
    private $cid3 = '';

    private $apiParams = [];

    public function get_api_params()
    {
        return $this->apiParams;
    }

    public function get_api_method_name()
    {
        return 'jingdong.union.search.queryCouponGoods';
    }

    //设置页码
    public function setPageIndex($index)
    {
        $this->pageIndex = $index;
        $this->apiParams['pageIndex'] = $index;
    }

    //设置数量
    public function setPageSize($size)
    {
        $this->pageSize = $size;
        $this->apiParams['pageSize'] = $size;
    }

    //设置三级类目
    public function setCid3($id)
    {
        $this->cid3 = $id;
        $this->apiParams['cid3'] = $id;
    }


    //////////获取参数////////////


    //设置页码
    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    //设置数量
    public function getPageSize()
    {
        return $this->pageSize;
    }

    //设置三级类目
    public function getCid3()
    {
        return $this->cid3;
    }

}
