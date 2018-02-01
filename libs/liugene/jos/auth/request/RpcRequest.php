<?php

// +----------------------------------------------------------------------
// |               签名拼装
// +----------------------------------------------------------------------

namespace liugene\jos\auth\request;

class RpcRequest
{

    //签名拼装
    public function generate_sign($params,$access_token)
    {
        //对参数进行排序
        ksort($params);
        //根据淘宝api要求md5加密需在前后加上密钥
        $string_to_be_signed = $access_token;
        foreach($params as $k => $v){
            if(is_string($v) && "@" != substr($v, 0, 1))
            {
                $string_to_be_signed .= "$k$v";
            }
        }
        unset($k, $v);
        $string_to_be_signed .= $access_token;
        return $string_to_be_signed;
    }

}
