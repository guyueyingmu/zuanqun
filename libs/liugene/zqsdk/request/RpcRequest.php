<?php

namespace liugene\zqsdk\request;

use liugene\zqsdk\auth\CreateMd5Sign;

class RpcRequest
{

    //签名拼装
    public function generate_sign(ProfileRequest $profile,$service)
    {
        $param = $this->generate_param($profile,$service);
        //对参数进行排序
        ksort($param);
        //根据api要求md5加密需在前后加上密钥
        $string_to_be_signed = $profile->getAppSecret();
        foreach($param as $k => $v){
            if(is_string($v) && "@" != substr($v, 0, 1))
            {
                $string_to_be_signed .= "$k$v";
            }
        }
        unset($k, $v);
        $string_to_be_signed .= $profile->getAppSecret();
        dump($string_to_be_signed);die;
        $param['sign'] = CreateMd5Sign::sign($string_to_be_signed);
        $profile->setSign($param['sign']);
        return $param;
    }

    private function generate_param(ProfileRequest $profile,$service)
    {
        $param['app_key'] = $profile->getAppKey();
        $param['action'] = $profile->getAction();
        $param['format'] = $profile->getFormat();
        $param['timestamp'] = $profile->getTimestamp();
        $param['v'] = $profile->getV();
        return array_merge($param,$service->get_api_param());
    }
}
