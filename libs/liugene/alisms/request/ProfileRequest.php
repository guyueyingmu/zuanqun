<?php

namespace liugene\alisms\request;

class ProfileRequest
{


    private $access_key_id;

    private $access_key_token;

    //格式为：yyyy-MM-dd’T’HH:mm:ss’Z’；时区为：GMT
    private $timestamp;

    //没传默认为JSON，可选填值：XML
    private $format = 'JSON';

    private $signature_method = 'HMAC-SHA1';

    //建议固定值：1.0
    private $signature_version = '1.0';

    //用于请求的防重放攻击，每次请求唯一
    private $signature_nonce;

    //最终生成的签名结果值
    private $signature;

    //请求地址
    private $domain = 'dysmsapi.aliyuncs.com';

    private $protocol_type = 'http';

    private $method = 'GET';

    public function setAccessKeyId($key)
    {
        $this->access_key_id = $key;
        return $this;
    }

    public function setAccessKeyToken($token)
    {
        $this->access_key_token = $token;
        return $this;
    }

    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    public function setSignatureMethod($method)
    {
        $this->signature_method = $method;
        return $this;
    }

    public function setSignatureNonce($nonce)
    {
        $this->signature_nonce = $nonce;
        return $this;
    }

    public function setSignatureVersion($version)
    {
        $this->signature_version = $version;
        return $this;
    }

    public function setSignature($sign)
    {
        $this->signature = $sign;
        return $this;
    }

    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    public function setProtocolType($type)
    {
        $this->protocol_type = $type;
        return $this;
    }

    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }


    /////////参数获取//////////


    public function getAccessKeyId()
    {
        return $this->access_key_id ;
    }

    public function getAccessKeyToken()
    {
        return $this->access_key_token;
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function getFormat()
    {
        return $this->format;
    }

    public function getSignatureMethod()
    {
        return  $this->signature_method;
    }

    public function getSignatureNonce()
    {
        return $this->signature_nonce;
    }

    public function getSignatureVersion()
    {
        return $this->signature_version;
    }

    public function getSignature()
    {
        return $this->signature;
    }

    public function getDomain()
    {
        return $this->domain;
    }

    public function getProtocolType()
    {
        return $this->protocol_type;
    }

    public function getMethod()
    {
        return $this->method;
    }

}