<?php

namespace app\logic\util\tbk;
use liugene\alitool\service\DecodeUlandService;
use liugene\alitool\AliTool;

class DeUland
{

    public function __construct()
    {
        AliTool::getInstance()->setService('deuland',new DecodeUlandService);
    }

    public function getUtil()
    {
        return 'deuland';
    }

    public function getE($e)
    {
        AliTool::getInstance()->getService('deuland')->setE($e);
        return $this;
    }

}