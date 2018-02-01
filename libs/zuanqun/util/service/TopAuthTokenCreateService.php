<?php

// +----------------------------------------------------------------------
// |               获取Access Token
// +----------------------------------------------------------------------

namespace zuanqun\util\service;

class TopAuthTokenCreateService implements ServiceInterface
{


    //授权code，grantType==authorization_code 时需要
    private $_code;

    //与生成code的uuid配对
    private $_uuid = '';

    private $_api_params;

    public function get_api_params()
    {
        return $this->_api_params;
    }

    public function get_api_method_name()
    {
        return 'taobao.top.auth.token.create';
    }

    //设置授权code
    public function set_code($code)
    {
        $this->_code = $code;
        $this->_api_params['code'] = $code;
    }

    //设置uuid
    public function set_uuid($id)
    {
        $this->_uuid = $id;
    }

}