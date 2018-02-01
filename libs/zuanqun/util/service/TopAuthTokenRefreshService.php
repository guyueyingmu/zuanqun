<?php

// +----------------------------------------------------------------------
// |               刷新Access Token
// +----------------------------------------------------------------------

namespace zuanqun\util\service;

class TopAuthTokenRefreshService implements ServiceInterface
{

    //grantType==refresh_token 时需要
    private $_refresh_token;

    private $_api_params;

    public function get_api_params()
    {
        return $this->_api_params;
    }

    public function get_api_method_name()
    {
        return 'taobao.top.auth.token.refresh';
    }

    //设置refresh token
    public function set_refresh_token($token)
    {
        $this->_refresh_token = $token;
        $this->_api_params['refresh_token'] = $token;
    }

    //获取refresh token
    public function get_refresh_token()
    {
        return $this->_refresh_token;
    }

}
