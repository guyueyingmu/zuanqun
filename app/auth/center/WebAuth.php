<?php

namespace app\auth\center;

class WebAuth
{

    private $zq_app_key = 'www.zuanqun.cn.2018.02.06';

    private $app_id;

    private $app_key;

    private $error = [
        10001  => 'request method must be get',
        40001  => 'app_id is empty',
        40002  => 'app_key is empty',
    ];

    public function set_app_id($app_id)
    {
        $this->app_id = $this->existsParam($app_id,40001);
        return $this;
    }

    public function set_app_key($app_key)
    {
        $this->app_key = $this->existsParam($app_key,40002);
        return $this;
    }

    //验证
    public function verify()
    {
        return $this->verifySign($this->sign($this->app_id));
    }

    //构造签名
    public function generateSign($app_id)
    {
        return $this->sign($app_id);
    }

    //验证
    private function verifySign($app_key)
    {
        if (function_exists('hash_equals')) {
            return hash_equals($this->app_key, $app_key);
        }
        return strcmp($this->app_key,$app_key);
    }

    //判断是否存在必要参数
    private function existsParam($param,$code)
    {
        //判断参数是否全部传入
        if($param == '' || empty($param)){
            exit(json_encode($this->errorCode($code)));
        }
        return $param;
    }

    //签名
    public function sign($string_to_sign)
    {
        return sha1($this->zq_app_key . $string_to_sign);
    }

    //错误返回
    private function errorCode($code)
    {
        return ['response_fail_msg' => ['code' => $code, 'error_msg' => $this->error[$code]]];
    }

}