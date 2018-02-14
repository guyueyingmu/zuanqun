<?php

namespace app\logic\goods\tbk;

use zuanqun\tbk\service\TbkUatmEventItemGetService;

class EventItemGet implements ServiceInterface
{

    private $_goods;

    public function getGoods()
    {
        if(isset($this->_goods)){
            return $this->_goods;
        } else {
            $this->_goods = new TbkUatmEventItemGetService();
        }
        return $this->_goods;
    }

    public function getFields($fields)
    {
        $this->getGoods()->set_fields($fields);
        return $this;
    }

    public function getPageSize($size)
    {
        $this->getGoods()->set_page_size($size);
        return $this;
    }

    public function getAdZoneId($id)
    {
        $this->getGoods()->set_adzone_id($id);
        return $this;
    }

    public function getUuid($id)
    {
        $this->getGoods()->set_unid($id);
        return $this;
    }

    public function getEventId($id)
    {
        $this->getGoods()->set_event_id($id);
        return $this;
    }

    public function getPageNo($page)
    {
        $this->getGoods()->set_page_no($page);
        return $this;
    }

}