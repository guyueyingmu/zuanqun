<?php

namespace liugene\auth;
use liugene\auth\model\Access;

class Auth2
{

    //API接口名称
    private $method;

    //应用的app_secret
    private $app_secret;

    //应用的app_key
    private $app_key;

    //签名
    private $sign;

    //时间戳，格式为yyyy-MM-dd HH:mm:ss，例如：2011-06-16 13:23:30。API服务端允许客户端请求时间误差为6分钟
    private $timestamp;

    //暂时只支持json
    private $format = 'json';

    //API协议版本，可选值:2.0
    private $v = '2.0';

    private $param = [];

    private $_request=[];

    private $request_param;

    private $error = [
        10000  => 'parameter illegality',
        10001  => 'request method must be get/post',
        20001  => 'client_id is empty',
        20002  => 'app_key is empty',
        20003  => 'method is empty',
        20004  => 'timestamp is empty',
        20005  => 'sign is empty',
        20006  => 'format is empty',
        20007  => 'v is empty',
        30000  => 'OAUTH SERVER ERROR:xxxxx',
        30001  => 'Can not find the client_id:xxxxx',
    ];

    public function verify($request)
    {
        $this->request_param = $request;
        $this->app_key = $this->existsParam('app_key',20002);
        $this->param['app_key'] = $this->app_key;
        $this->method = $this->existsParam('method',20003);
        $this->param['method'] = $this->method;
        $this->sign = $this->existsParam('sign',20005);
        $this->format = $this->existsParam('format',20006);
        $this->param['format'] = $this->format;
        $this->timestamp = $this->existsParam('timestamp',20004);
        $this->param['timestamp'] = $this->timestamp;
        $this->v = $this->existsParam('v',20007);
        $this->param['v'] = $this->v;
        $this->app_secret = $this->getSecret();
        $this->param['app_secret'] = $this->app_secret;
        return $this->verifySign($this->sign($this->generate_sign()));
    }


    //签名拼装
    private function generate_sign()
    {
        //对参数进行排序
        ksort($this->param);
        //根据api要求md5加密需在前后加上密钥
        $string_to_be_signed = $this->app_secret;
        foreach($this->param as $k => $v){
            if(is_string($v) && "@" != substr($v, 0, 1))
            {
                $string_to_be_signed .= "$k$v";
            }
        }
        unset($k, $v);
        $string_to_be_signed .= $this->app_secret;
        return $string_to_be_signed;
    }

    //签名
    private function sign($string_to_sign)
    {
        return strtoupper(md5($string_to_sign));
    }

    public function request()
    {
        //保存api实例对象
        if(isset($this->_request[$this->method])){
            return $this->_request[$this->method];
        } else {
            $class = '\\app\\api\\request\\' . $this->method;
            //实例化api接口
            $this->_request[$this->method] = new $class;;
        }
        //统一调用api接口方法
        return $this->_request[$this->method]->getJson();
    }

    //错误返回
    private function errorCode($code)
    {
        return ['code' => $code, 'error_msg' => $this->error[$code]];
    }

    //判断是否存在必要参数
    private function existsParam($param,$code)
    {
        //判断参数是否全部传入
        if(array_key_exists($param,$this->request_param)){
            //判断参数是否为空
            if($this->request_param[$param] == '' || is_null($this->request_param[$param])){
                exit(json_encode($this->errorCode($code)));
            }
            return $this->request_param[$param];
        } else {
            exit(json_encode($this->errorCode(10000)));
        }
    }

    //sign验证
    private function verifySign($sign)
    {
        if (function_exists('hash_equals')) {
            return hash_equals($this->sign, $sign);
        }
        return strcmp($this->sign,$sign);
    }

    //获取用户私钥
    private function getSecret()
    {
        try{
            $secret = Access::getAppSecret($this->app_key);
            if(!$secret){
                exit(json_encode($this->errorCode(30001)));
            }
            return $secret;
        } catch(AccessException $e) {
            //
            exit(json_encode($this->errorCode(30000)));
        }
    }

}
