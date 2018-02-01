<?php

// +----------------------------------------------------------------------
// | 淘宝客淘口令生成
// +----------------------------------------------------------------------

namespace zuanqun\tbk\service;

class TbkTpwdCreateService implements  ServiceInterface
{
    //生成口令的淘宝用户ID
    private $_user_id = '';

    //口令弹框内容
    private $_text;

    //口令跳转目标页
    private $_url;

    //口令弹框logoURL
    private $_logo = '';

    //扩展字段JSON格式
    private $_ext = '';

    private $_api_params = [];

    public function get_api_params()
    {
        return $this->_api_params;
    }

    public function get_api_method_name()
    {
        return 'taobao.tbk.tpwd.create';
    }

    //设置生成口令的淘宝用户ID
    public function set_user_id($id)
    {
        $this->_user_id = $id;
        $this->_api_params['user_id'] = $id;
    }

    //获取生成口令的淘宝用户ID
    public function get_user_id()
    {
        return $this->_user_id;
    }

    //设置口令弹窗内容
    public function set_text($text)
    {
        $this->_text = $text;
        $this->_api_params['text'] = $text;
    }

    //获取口令弹窗内容
    public function get_text()
    {
        return $this->_text;
    }

    //设置口令条状目标页
    public function set_url($url)
    {
        $this->_url = $url;
        $this->_api_params['url'] = $url;
    }

    //获取口令条状目标页
    public function get_url()
    {
        return $this->_url;
    }

    //设置口令弹窗logourl
    public function set_logo($logo)
    {
        $this->_logo = $logo;
        $this->_api_params['logo'] = $logo;
    }

    //获取口令弹窗logourl
    public function get_logo()
    {
        return $this->_logo;
    }

    //设置扩展json格式
    public function set_ext($ext)
    {
        $this->_ext = $ext;
        $this->_api_params['ext'] = $ext;
    }

    //获取扩展json格式
    public function get_ext()
    {
        return $this->_ext;
    }

}
