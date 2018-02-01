<?php

// +----------------------------------------------------------------------
// |               签名拼装
// +----------------------------------------------------------------------

namespace zuanqun\auth\request;

class RpcRequest
{
    public function generate_sign($params,$secret_key)
    {
        //对参数进行排序
        ksort($params);
        //根据淘宝api要求md5加密需在前后加上密钥
        $string_to_be_signed = $secret_key;
        foreach ($params as $k => $v)
        {
            if(is_string($v) && "@" != substr($v, 0, 1))
            {
                $string_to_be_signed .= "$k$v";
            }
        }
        unset($k, $v);
        $string_to_be_signed .= $secret_key;
        return $string_to_be_signed;
    }
}
