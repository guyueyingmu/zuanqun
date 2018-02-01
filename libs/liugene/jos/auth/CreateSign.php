<?php

// +----------------------------------------------------------------------
// |               签名构造
// +----------------------------------------------------------------------

namespace liugene\jos\auth;
use liugene\jos\auth\request\RpcRequest;
use liugene\jos\auth\sign\Md5Sign;

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

    //创建入口
    public function create($params,$access_token)
    {
        return $this->create_sign($params,$access_token);
    }

    //构造签名
    public function create_sign($params,$access_token)
    {
        $string_to_be_signed = $this->_rpc_object->generate_sign($params,$access_token);
        return Md5Sign::sign($string_to_be_signed);
    }

}
