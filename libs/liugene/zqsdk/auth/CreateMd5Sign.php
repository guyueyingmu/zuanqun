<?php

namespace liugene\zqsdk\auth;

class CreateMd5Sign
{
    //签名
    static public function sign($string_to_sign)
    {
        return strtoupper(md5($string_to_sign));
    }
}
