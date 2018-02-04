<?php

namespace liugene\alisms\request;
use liugene\alisms\auth\ShaHmacSign;

class RpcRequest
{

    public function generate_url(ProfileRequest $profile,$service)
    {
        $url = $profile->getProtocolType() . '://' . $profile->getDomain() . '/?';
        $system_param['AccessKeyId'] = $profile->getAccessKeyId();
        date_default_timezone_set('GMT');
        $system_param['Timestamp'] = date("Y-m-d H:i:s");
        $system_param['Format'] = $profile->getFormat();
        $system_param['SignatureMethod'] = $profile->getSignatureMethod();
        $system_param['SignatureVersion'] = $profile->getSignatureVersion();
        $system_param['SignatureNonce'] = $profile->getSignatureNonce();
        $api_param = $service->get_api_param();
        $system_param['Signature'] = ShaHmacSign::sign($this->generate_sign($profile,array_merge($system_param,$api_param)),$profile->getAccessKeyToken() . '&');
        $profile->setSignature($system_param['Signature']);
        foreach(array_merge($system_param,$api_param) as $url_param_key => $url_param_value)
        {
            $url .= $url_param_key . '=' . urlencode($url_param_value) . '&';
        }
        return substr($url, 0, -1);
    }

    public function generate_sign(ProfileRequest $profile,$param)
    {
        ksort($param);
        $constructSignatureString = '';
        foreach ($param as $k => $v){
            $constructSignatureString .= '&' . $this->replaceEncode($k) . '=' . $this->replaceEncode($v);
        }
        $signature = $profile->getMethod() . '&' . $this->replaceEncode('/') . '&' . $this->replaceEncode(substr($constructSignatureString,1));
        return $signature;
    }

    //处理参数public function replaceEncode($str)
    private function replaceEncode($str)
    {
        $res = urlencode($str);
        $res = preg_replace('/\+/', '%20', $res);
        $res = preg_replace('/\*/', '%2A', $res);
        $res = preg_replace('/%7E/', '~', $res);
        return $res;
    }

}