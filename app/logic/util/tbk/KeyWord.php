<?php

namespace app\logic\util\tbk;
use liugene\alitool\service\KeyWordService;
use liugene\alitool\AliTool;

class KeyWord
{

    private $_util;

    public function __construct()
    {
        AliTool::getInstance()->setService('keyword',new KeyWordService);
        $this->_util = 'keyword';
    }

    public function getUtil()
    {
        if(isset($this->_util)){
            return $this->_util;
        } else {
            AliTool::getInstance()->setService('keyword',new KeyWordService);
            $this->_util = 'keyword';
        }
        return $this->_util;
    }

    ///////////////////商品获取//////////////////

    public function getQ($q)
    {
        AliTool::getInstance()->getService('keyword')->setQ($q);
        return $this;
    }

}
