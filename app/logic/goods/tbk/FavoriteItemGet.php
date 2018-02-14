<?php

namespace app\logic\goods\tbk;

use zuanqun\tbk\service\TbkUatmFavoritesItemGetService;

class FavoriteItemGet implements ServiceInterface
{
    private $_goods;

    public function getGoods()
    {
        if(isset($this->_goods)){
            return $this->_goods;
        } else {
            $this->_goods = new TbkUatmFavoritesItemGetService();
        }
        return $this->_goods;
    }

    public function getFields($field)
    {
        $this->getGoods()->set_fields($field);
        return $this;
    }

    public function getPageNo($page)
    {
        $this->getGoods()->set_page_no($page);
        return $this;
    }

    public function getPageSize($size)
    {
        $this->getGoods()->set_page_size($size);
        return $this;
    }

    public function getFavoriteId($id)
    {
        $this->getGoods()->set_favorites_id($id);
        return $this;
    }

    public function getAdzoneId($id)
    {
        $this->getGoods()->set_adzone_id($id);
        return $this;
    }

    public function getUuid($id)
    {
        $this->getGoods()->set_unid($id);
        return $this;
    }
}