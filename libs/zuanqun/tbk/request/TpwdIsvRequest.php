<?php

// +----------------------------------------------------------------------
// |               isv 淘口令生成参数
// +----------------------------------------------------------------------
namespace zuanqun\tbk\request;

class TpwdIsvRequest
{

    //{"xx":"xx"} 扩展字段JSON格式
    public $ext = '';

    //    http://m.taobao.com/xxx.jpg口令弹框logoURL
    public $logo = '';

    //http://m.taobao.com 口令跳转url
    public $url;

    //口令弹框内容
    public $text;

    // 默认值：0 生成口令的淘宝用户ID
    public $user_id = '0';

    //设置扩展字段
    public function set_ext($ext)
    {
        $this->ext = $ext;
    }

    //设置口令弹窗logo url
    public function set_logo($url)
    {
        $this->logo = $url;
    }

    //设置口令弹窗内容
    public function set_text($text)
    {
        $this->text = $text;
    }

    //设置口令跳转url
    public function set_url($url)
    {
        $this->url = $url;
    }

    //设置淘宝用户id
    public function set_user_id($id)
    {
        $this->user_id = $id;
    }

}