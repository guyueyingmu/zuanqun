<?php

namespace zuanqun\auth;
use zuanqun\auth\sign\Md5Sign;
use zuanqun\auth\request\RpcRequest;

class CreateSign
{

    //签名构造类对象
    private $_rpc_object;

    public function __construct()
    {
        if(!isset($this->_rpc_object)){
            $this->_rpc_object = new RpcRequest();
        }
    }

    public function create($api_params,$secret_key)
    {
        return $this->create_sign($api_params,$secret_key);
    }

    function create_sign($params,$secret_key)
    {
        $string_to_be_signed = $this->_rpc_object->generate_sign($params,$secret_key);
        if($params['sign_method'] == 'md5'){
            return Md5Sign::sign($string_to_be_signed);
        } else {
            return Md5Sign::sign($string_to_be_signed);
        }
    }
}
