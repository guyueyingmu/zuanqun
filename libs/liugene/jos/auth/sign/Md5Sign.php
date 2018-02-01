<?php

// +----------------------------------------------------------------------
// |               md5签名加密
// +----------------------------------------------------------------------

namespace liugene\jos\auth\sign;

class Md5Sign
{

    //签名
    static  public function sign($string_to_sign)
    {
        return strtoupper(md5($string_to_sign));
    }

}
