<?php

namespace app\logic\util\tbk;
use liugene\alitool\service\ToUlandService;
use liugene\alitool\AliTool;

class ToUland
{

    public function __construct()
    {
        AliTool::getInstance()->setService('touland',new ToUlandService);
    }

    public function getUtil()
    {
        return 'touland';
    }

    ///////////////////商品获取//////////////////

    public function getActivityId($activityId)
    {
        AliTool::getInstance()->getService('touland')->setActivityId($activityId);
        return $this;
    }

    public function getPid($pid)
    {
        AliTool::getInstance()->getService('touland')->setPid($pid);
        return $this;
    }

    public function getItemId($itemId)
    {
        AliTool::getInstance()->getService('touland')->setItemId($itemId);
        return $this;
    }

    public function getDx($type)
    {
        AliTool::getInstance()->getService('touland')->setDx($type);
        return $this;
    }

}
