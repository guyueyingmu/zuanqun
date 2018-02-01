<?php

// +----------------------------------------------------------------------
// |               公共参数
// +----------------------------------------------------------------------

namespace zuanqun\auth\request;

class ProfileRequest
{
    //API接口名称
    protected $_method;

    //TOP分配给应用的AppKey
    protected $_app_key;

    //密钥
    protected $_secret_key;

    //用户登录授权成功后，TOP颁发给应用的授权信息。可选参数，再需授权接口需要传送
    protected $_session = '';

    //时间戳，格式为yyyy-MM-dd HH:mm:ss，时区为GMT+8，例如：2016-01-01 12:00:00
    protected $_timestamp;

    //响应格式。默认为xml格式，可选值：xml，json
    protected $_format = 'json';

    //API协议版本，可选值：2.0
    protected $_v = '2.0';

    //合作伙伴身份标识
    protected $_partner_id = '';

    //被调用的目标AppKey，仅当被调用的API为第三方ISV提供时有效
    protected $_target_app_key = '';

    //是否采用精简JSON返回格式，仅当format=json时有效，默认值为：false
    protected $_simplify = 'false';

    //签名的摘要算法，可选值为：hmac，md5
    protected $_sign_method = 'md5';

    //调用环境
    protected $_gateway_url = 'http://gw.api.taobao.com/router/rest';

    //API输入参数签名结果，签名算法参照下面的介绍
    protected $_sign;

    //设置app_key
    public function set_app_key($app_key)
    {
        $this->_app_key = $app_key;
    }

    //获取app_key
    public function get_app_key()
    {
        return $this->_app_key;
    }

    //设置密钥
    public function set_secret_key($secret_key)
    {
        $this->_secret_key = $secret_key;
    }

    //获取密钥
    public function get_secret_key()
    {
        return $this->_secret_key;
    }

    //设置登入成功后session
    public function set_session($session)
    {
        $this->_session = $session;
    }

    //获取登入成功后session
    public function get_session()
    {
        return $this->_session;
    }

    //设置时间戳
    public function set_timestamp($timestamp)
    {
        $this->_timestamp = $timestamp;
    }

    //获取时间戳
    public function get_timestamp()
    {
        return $this->_timestamp;
    }

    //设置响应格式
    public function set_format($format)
    {
        $this->_format = $format;
    }

    //获取响应格式
    public function get_format()
    {
        return $this->_format;
    }

    //设置api版本
    public function set_v($v)
    {
        $this->_v = $v;
    }

    //获取api版本
    public function get_v()
    {
        return $this->_v;
    }

    //设置合作伙伴身份标志
    public function set_partner_id($partner_id)
    {
        $this->_partner_id = $partner_id;
    }

    //获取合作伙伴身份标志
    public function get_partner_id()
    {
        return $this->_partner_id;
    }

    //设置被调用目标app_key
    public function set_target_app_key($target_app_key)
    {
        $this->_target_app_key = $target_app_key;
    }

    //获取被调用目标app_key
    public function get_target_app_key()
    {
        return $this->_target_app_key;
    }

    //设置是否采用精简json格式
    public function set_simplify($simplify)
    {
        $this->_simplify = $simplify;
    }

    //获取是否采用精简json格式
    public function get_simplify()
    {
        return $this->_simplify;
    }

    //设置签名算法
    public function set_sign_method($sign_method)
    {
        $this->_sign_method = $sign_method;
    }

    //获取签名算法
    public function get_sign_method()
    {
        return $this->_sign_method;
    }

    //API签名
    public function set_sign($sign)
    {
        $this->_sign = $sign;
    }

    //获取API签名
    public function get_sign()
    {
        return $this->_sign;
    }

    //设置调用环境
    public function set_gateway_url($url)
    {
        $this->_gateway_url = $url;
    }

    //获取调用环境
    public function get_gateway_url()
    {
        return $this->_gateway_url;
    }

}
