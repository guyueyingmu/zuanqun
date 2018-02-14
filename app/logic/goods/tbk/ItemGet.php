<?php

namespace app\logic\goods\tbk;
use zuanqun\tbk\service\TbkItemGetService;

class ItemGet implements ServiceInterface
{

    private $_goods;

    public function getGoods()
    {
        if(isset($this->_goods)){
            return $this->_goods;
        } else {
            $this->_goods = new TbkItemGetService();
        }
        return $this->_goods;
    }

    ///////////////////商品获取//////////////////

    //获取商品字段
    public function getFields($fields)
    {
        $this->getGoods()->set_fields($fields);
        return $this;
    }

    //根据查询词获取
    public function getQ($q)
    {
        $this->getGoods()->set_q($q);
        return $this;
    }

}
